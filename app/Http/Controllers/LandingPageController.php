<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('pages.layouts.index');
    }

    public function shop()
    {
        return view('pages.layouts.shop');
    }

    public function shopDetail()
    {
        return view('pages.layouts.shop-detail');
    }

    public function cart()
    {
        return view('pages.layouts.cart');
    }

    public function chackout()
    {
        return view('pages.layouts.chackout');
    }

    public function contact()
    {
        return view('pages.layouts.contact');
    }
}
