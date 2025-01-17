<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ImageHelper;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Property;
use App\Models\PropertyAddress;
use App\Models\PropertyImage;
use App\Models\Category;
use App\Models\Mortgage;

class PropertyController extends Controller
{
    public function index()
    {
        $property = Property::with('category', 'brand')->paginate(10);
        return view('pages.backend.property.index', compact('property'));
    }

    public function create()
    {
        $property = null;
        return view('pages.backend.property.create-edit', compact('property'));
    }

    public function store(Request $request) 
    {
        // Determine if this is an update
        $PropertyId = $request->input('Property_id');

        // Validate the request
        $validatedData = $request->validate([
            'Property_name' => [
                'required',
                'string',
                'max:255',
                // Ensure uniqueness excluding the current Property ID
                Rule::unique('Propertys', 'Property_name')->ignore($PropertyId, 'id'),
            ],
            'description' => 'nullable|string',
        ]);

        // Determine Property to update or create
        $Property = $PropertyId ? Property::findOrFail($PropertyId) : new Property();

        // Assign Property attributes
        $Property->Property_name = $request->input('Property_name');
        $Property->main_image = ImageHelper::uploadImage($request->file('main_image'), 'images/Property', $Property->main_image);
        $Property->category_id = $request->input('category_id');
        $Property->brand_id = $request->input('brand_id');
        $Property->description = $request->input('description');
        $Property->short_description = $request->input('short_description');
        $Property->manufacturer_name = $request->input('manufacturer_name');
        $Property->price = $request->input('price');
        $Property->discount = $request->input('discount');
        $Property->tags = json_encode(explode(',', $request->input('tags'))) ?? null;
        $Property->publish_schedule = $request->input('publish_schedule');
        $Property->visibility = $request->input('visibility');
        $Property->status = $request->input('status');
        $Property->meta_title = $request->input('meta_title');
        $Property->meta_keywords = $request->input('meta_keywords');
        $Property->meta_description = $request->input('meta_description');
        $Property->user_id = Auth::user()->id;

        // Save the Property
        $Property->save();
    
        // Handle Images file uploads
        if ($request->hasFile('Property_images')) {
            foreach ($request->file('Property_images') as $file) {
                PropertyImage::create([
                    'Property_id' => $Property->id,
                    'image_path' => ImageHelper::uploadImage($file, 'images/Property/gallery', null),
                ]);
            }
        }

        foreach ($request->input('variants') as $key => $variant) {
            // Safely extract the id from the variant array
            $variantId = $variant['id'] ?? null;
        
            // Find the existing variant by ID, if ID is provided
            $currentVariant = $variantId ? PropertyAddress::find($variantId) : null;
            $currentImagePath = $currentVariant ? $currentVariant->img_path : null;
        
            // Retrieve the new image file from the request, if available
            $requestImg = $request->file("variants.{$key}.img_path");
        
            // Prepare the Property variant data
            $PropertyVariant = [
                'Property_id' => $Property->id,
                'img_path' => ImageHelper::uploadImage($requestImg, 'images/Property/variant', $currentImagePath),
                'color_id' => $variant['color_id'] ?? null,
                'size' => $variant['size'] ?? null,
                'price' => $variant['price'] ?? null,
                'quantity' => $variant['quantity'] ?? null,
            ];
        
            // Update or create the Property variant
            PropertyAddress::updateOrCreate(['id' => $variantId], $PropertyVariant);
        }
        
        

        // Store Property specifications
        if ($request->has('specifications')) {
            foreach ($request->input('specifications') as $specification) {
                $PropertySpecification = [
                    'Property_id' => $Property->id,
                    'specification_name' => $specification['specification_name'] ?? null,
                    'specification_value' => $specification['specification_value'] ?? null,
                ];

                // Update or create the Property specification
                PropertyAddress::updateOrCreate(['id' => $specification['id'] ?? null], $PropertySpecification);
            }
        }

        // Store Property details
        if ($request->has('details')) {
            foreach ($request->input('details') as $detail) {
                $PropertyDetail = [
                    'Property_id' => $Property->id,
                    'detail_name' => $detail['detail_name'] ?? null,
                    'detail_value' => $detail['detail_value'] ?? null,
                ];
                // Update or create the Property specification
                PropertyAddress::updateOrCreate(['id' => $detail['id'] ?? null], $PropertyDetail);
            }
        }

        return redirect()->back()->with('success', 'Property created successfully.');
        // return redirect()->route("Propertys.index")->with('success', 'Property created successfully.');
    }
    
    public function show($id)
    {
        // Fetch the Property with its related data
        $Property = Property::with(['variants', 'specifications', 'details'])->findOrFail($id);
        return view('ecommerce.backend.Propertys.show', compact('Property'));
    }
    
    public function edit($id)
    {
        $Property = Property::findOrFail($id);
        $categories = Category::all();
        return view('ecommerce.backend.Propertys.create', compact('Property', 'categories', 'brands', 'colors'));
    }

    public function destroy($id)
    {
        $Property = Property::findOrFail($id);
        $Property->delete();

        return redirect()->route('Propertys.index')->with('success', 'Property deleted successfully.');
    }


    public function PropertyImagesDestroy($id)
    {
        $data = PropertyImage::findOrFail($id);

        // Delete the image file from storage if it exists
        if (File::exists(public_path($data->image_path))) {
            File::delete(public_path($data->image_path));
        }
        $data->delete();
        return response()->json(['success' => true]);
    }


    public function storeMortgage(Request $request)
    {
        $request->validate([
            'home_value' => 'required|numeric',
            'loan_amount' => 'required|numeric',
            'term_years' => 'required|integer',
            'interest_rate' => 'required|numeric',
        ]);

        // Calculate financed amount (assuming loan amount covers the home value)
        $financedAmount = $request->loan_amount;

        // Convert annual interest rate percentage to decimal and divide by 12 for monthly interest rate
        $monthlyInterestRate = ($request->interest_rate / 100) / 12;

        // Convert term years to months
        $totalMonths = $request->term_years * 12;

        // Mortgage payment calculation using standard formula: M = P[r(1+r)^n] / [(1+r)^n - 1]
        $mortgagePayment = 0;
        if ($monthlyInterestRate > 0) {
            $mortgagePayment = $financedAmount * ($monthlyInterestRate * pow(1 + $monthlyInterestRate, $totalMonths)) / (pow(1 + $monthlyInterestRate, $totalMonths) - 1);
        }

        // Annual cost of the loan
        $annualCost = $mortgagePayment * 12;

        // Save mortgage calculation
        $mortgage = Mortgage::create([
            'home_value' => $request->home_value,
            'loan_amount' => $request->loan_amount,
            'term_years' => $request->term_years,
            'interest_rate' => $request->interest_rate,
            'financed_amount' => $financedAmount,
            'mortgage_payments' => $mortgagePayment,
            'annual_cost_of_loan' => $annualCost
        ]);

        return back()->with('success', 'Mortgage calculated successfully!')->with('mortgage', $mortgage);
    }


}
