<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Color;
use App\Size;
use App\Item;

class ItemController extends Controller
{
    public function create(Product $product)
    {
    	// dd($product);
    	$colors = Color::all();
    	$sizes = Size::all();
    	// dd($sizes);
    	return view('items.create', compact('colors', 'sizes'))->with('product', $product);
    }

    public function store(Request $request, Product $product)
    {
    	// dd($request->input());
    	// dd($product);
    	$validatedData = $request->validate([
    	    'name' => 'required',
    	    'color_id' => 'required',
    	    'size_id' => 'required'
    	]);

    	$item = new Item;
    	$item->name = $request->name;
    	$item->product_id = $product->id;
    	$item->color_id = $request->color_id;
    	$item->size_id = $request->size_id;
    	$item->image = "itemimage.jpg";

    	$item->save();

    	return redirect('products/' .$product->id );
    }

    public function checkStocks(Product $product, Request $request)
    {
        // dd($product);
        $validatedData = $request->validate([
            'color_id' => 'required',
            'size_id' => 'required'
        ]);

        $stocks = Item::where('color_id', $request->color_id)->where('size_id', $request->size_id)->where('product_id', $product->id)->count();

        // dd($stocks);

        return redirect('/products/' .$product->id)->with('stocks', $stocks);
    }
}
