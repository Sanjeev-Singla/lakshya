<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {   
        $products = \App\Models\Product::whereIsActive(1)->get();
        return view('website.pages.products',compact('products'));
    }
}
