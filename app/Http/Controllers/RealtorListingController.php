<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RealtorListingController extends Controller
{
    public function index()
    {
        //dd(Auth::user()->listings);
        return inertia(
            'Realtor/Index',
            ['listings' => Auth::user()->listings]
        );
    }
}
