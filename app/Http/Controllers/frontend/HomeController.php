<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function cosmetic()
    {
        return view('frontend.cosmetic');
    }

    public function lens()
    {
        return view('frontend.lens');
    }

    public function skin()
    {
        return view('frontend.skin');
    }
}
