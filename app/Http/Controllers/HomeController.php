<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Illuminate\Validation\Rule;


class HomeController extends Controller
{
    public function welcome(Request $request): View
    {
        $user = Auth::user();
        return view('welcome', compact('user'));
    }
    public function properties(Request $request)
    {
        return view('pages.frontend.properties');
    }
    public function propertiesDetails(Request $request, $id)
    {
        return view('pages.frontend.properties-details');
    }
    public function about(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.about', compact('user'));
    }
    public function agents(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.agents', compact('user'));
    }
    public function gallery(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.gallery', compact('user'));
    }
    public function blog(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.blog', compact('user'));
    }
    public function blogDetails(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.blog-details', compact('user'));
    }
    public function contact(Request $request): View
    {
        $user = Auth::user();
        return view('pages.frontend.contact', compact('user'));
    }
    public function userProfile(Request $request): View
    {
        return view('pages.frontend.profile');
    }
    



    
    
}
