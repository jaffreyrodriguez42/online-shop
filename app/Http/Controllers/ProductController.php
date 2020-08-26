<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Item;
use App\Color;
use App\Size;
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
        $colors = Color::all();
        $sizes = Size::all();
        $itemStock = Item::where('product_id', $product->id)->where('status', 'available')->count(); 
    	return view('products.show', compact('colors', 'sizes'))->with('product', $product)->with('itemStock', $itemStock);
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
