<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Color;
use App\Size;
use App\Item;
use App\Http\Controllers\Controller;

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

        $color = Color::where('id', $request->color_id)->first();
        $color = $color->name;

        $size = Size::where('id', $request->size_id)->first();
        $size = $size->name;



        return response()->json([
            'data' => $stocks,
            'color' => $color,
            'size' => $size

        ], 201);

        // dd($stocks);

        // return redirect('/products/' .$product->id)->with('stocks', $stocks);
    }

    public function addtocart(Product $product, Request $request)
    {
        $validatedData = $request->validate([
            'color_id' => 'required',
            'size_id' => 'required',
            'quantity' => 'required'
        ]);

        // $item = $request->color_id;

        $color = Color::where('id', $request->color_id)->first();
        $colorName = $color->name;

        $size = Size::where('id', $request->size_id)->first();
        $sizeName = $size->name; 


        $item = array("prod_id" => $product->id,
                      "prod_name" => $product->name,
                      "color_name" => $colorName,
                      "size_name" => $sizeName,
                      "quantity" => $request->quantity
                      
        );
        
        $request->session()->push('item', $item);



        // session(['prod_id' => $product->id]);
        // session(['prod_name' => $product->name]);
        // session(['color_name' => $colorName]);
        // session(['size_name' => $sizeName]);
        // session(['quantity' => $request->quantity]);







        // session(['cart' => 1]);



        // $value = $request->session()->get('cart');

        // $items = [
        //     'prod_id' => $product->id,
        //     'color_id' => $request->color_id,
        //     'size_id' => $request->size_id,
        //     'quantity' => $request->quantity
        // ];

        // $request->session()->put('cart', $items);

        // dd($_SESSION);

        // session('cart', $items);

        // print_r($_SESSION);

        $value = $request->session()->get('item')[0]['cart'];

        // $value = session('items')[0]['cart'];


        return response()->json([
            'data' => $value
        ], 201);
    }
}
