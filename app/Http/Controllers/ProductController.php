<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	// dd($products);
    	// return view('products.index', compact('products'));
    	return view()->first(['products.index', '/'], $products);
    }
}
