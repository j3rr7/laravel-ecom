<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/index');
    }

    public function shop()
    {
        return view('home/shop');
    }

    public function contact()
    {
        return view('home/contact');
    }

    public function wishlist()
    {
        return view('home/wishlist');
    }

    public function cart()
    {
        return view('home/cart');
    }

    public function checkout()
    {
        return view('home/checkout');
    }
}
