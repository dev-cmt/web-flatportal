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
    public function userProfile(Request $request): View
    {
        return view('pages.frontend.profile');
    }
    
    public function properties(Request $request)
    {
        return view('pages.frontend.properties');
    }
    public function propertiesDetails(Request $request, $id)
    {
        return view('pages.frontend.properties-details');
    }
}
