<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::all();
        return view('home/index')
            ->with('categories', $categories)
        ;
    }

    public function shop(Request $request)
    {
        $page = is_null($request->query('page')) ? 1 : $request->query('page');
        $categories = \App\Models\Category::all();
        $products = \App\Models\Product::offset(0)->limit(20)->get();
        return view('home/shop')
            ->with('page', $page)
            ->with('categories', $categories)
            ->with('products', $products)
        ;
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
