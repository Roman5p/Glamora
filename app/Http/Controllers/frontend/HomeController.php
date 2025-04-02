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

    public function Dress()
    {
        return view('frontend.Dresses');
    }

    public function accessory()
    {
        return view('frontend.accessories');
    }

    public function handbag()
    {
        return view('frontend.handbags');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }
}
