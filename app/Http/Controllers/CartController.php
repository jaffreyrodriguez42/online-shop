<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->session()->exists('item')){
    		$data = $request->session()->all();
    		$items = $data['item'];
    		// foreach ($items as $key => $item) {
    		// 	dd($items[2]['prod_id']);
    		// }
    		// dd($data['cart']);
    		return view('cart.index', compact('items'));
    	}else{
    		return view('cart.index');
    	}

    }
}
