<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	// dd($products);
    	return view('products.index', compact('products'));
    	// return view()->first(['products.index', '/'], $products);
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function show(Product $product)
    {
    	return view('products.show')->with('product', $product);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        $product->save();

        return redirect('/products/create');
    }
}
