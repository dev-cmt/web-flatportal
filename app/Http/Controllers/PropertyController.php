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
use App\Models\User;

class PropertyController extends Controller
{
    public function index()
    {
        $property = Property::paginate(10);
        return view('pages.backend.property.index', compact('property'));
    }

    public function create()
    {
        $property = null;
        $agents = User::where('status', 1)->get();
        return view('pages.backend.property.create-edit', compact('property', 'agents'));
    }

    public function store(Request $request) 
    {
        // Determine if this is an update
        $propertyId = $request->input('property_id');

        // Validate the request
        $validatedData = $request->validate([
            'property_name' => [
                'required',
                'string',
                'max:255',
                // Ensure uniqueness excluding the current Property ID
                Rule::unique('properties', 'property_name')->ignore($propertyId, 'id'),
            ],
            'description' => 'nullable|string',
            // Add other fields to validation as needed, like area_size, price, etc.
        ]);

        // Determine Property to update or create
        $Property = $propertyId ? Property::findOrFail($propertyId) : new Property();

        // Update or create property fields
        $Property->property_name = $request->property_name;
        $Property->area_size = $request->area_size;
        $Property->price = $request->price;
        $Property->bedroom_count = $request->bedroom_count;
        $Property->bathroom_count = $request->bathroom_count;
        $Property->dining_room_count = $request->dining_room_count;
        $Property->balcony_count = $request->balcony_count;
        $Property->phases = $request->phases;
        $Property->status = $request->status;
        $Property->agent_id = $request->agent_id;
        $Property->description = $request->description;
        $Property->image_path = ImageHelper::uploadImage($request->file('image_path'), 'images/Property', $Property->image_path);;
        $Property->video_path = ImageHelper::uploadImage($request->file('video_path'), 'images/Property', $Property->video_path);;
        $Property->floor_plan_path = ImageHelper::uploadImage($request->file('floor_plan_path'), 'images/Property', $Property->floor_plan_path);;
        $Property->pdf_path = ImageHelper::uploadImage($request->file('pdf_path'), 'images/Property', $Property->pdf_path);;

        // Save the property
        $Property->save();

        // After saving the property, handle the property address
        $PropertyAddress = $Property->propertyAddress ?? new PropertyAddress();
        $PropertyAddress->property_id = $Property->id;
        $PropertyAddress->property_status = $request->property_status;
        $PropertyAddress->property_type = $request->property_type;
        $PropertyAddress->property_condition = $request->property_condition;
        $PropertyAddress->built_year = $request->built_year;
        $PropertyAddress->dimension = $request->dimension;
        $PropertyAddress->country = $request->country;
        $PropertyAddress->city = $request->city;
        $PropertyAddress->location = $request->location;

        // Save or update property address
        $PropertyAddress->save();
        
        // Handle images file uploads
        if ($request->hasFile('property_images')) {
            foreach ($request->file('property_images') as $file) {
                PropertyImage::create([
                    'property_id' => $Property->id,
                    'property_image' => ImageHelper::uploadImage($file, 'images/property/gallery', null),
                ]);
            }
        }

        // return redirect()->back()->with('success', 'Property saved successfully.');
        // or
        return redirect()->route("property.index")->with('success', 'Property saved successfully.');
    }

    
    public function show($id)
    {
        // Fetch the Property with its related data
        $property = Property::with('propertyAddress', 'propertyImages')->findOrFail($id);
        return view('pages.backend.property.show', compact('property'));
    }
    
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        $propertyAddress = $property->propertyAddress;
        $agents = User::where('status', 1)->get();
        return view('pages.backend.property.create-edit', compact('property', 'propertyAddress', 'agents'));
    }

    public function destroy($id)
    {
        $Property = Property::findOrFail($id);
        $Property->delete();

        return redirect()->route('property.index')->with('success', 'Property deleted successfully.');
    }


    public function propertyImagesDestroy($id)
    {
        $data = PropertyImage::findOrFail($id);

        // Delete the image file from storage if it exists
        if (File::exists(public_path($data->property_image))) {
            File::delete(public_path($data->property_image));
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
