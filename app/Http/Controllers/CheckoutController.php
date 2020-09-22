<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class CheckoutController extends Controller
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
			return view('checkout.index', compact('items'));
		}else{
			return view('checkout.index');
		}

	}

	public function store(Request $request)
	{

		// dd($request->get('itemId'));
		$itemIds = $request->get('itemId');
		$items = [];
		foreach($itemIds as $id){
			$item = Item::where('id', $id)->first();
			array_push($items, $item);
		}

		// dd($items);
		return view('checkout.index', compact('items'));

	}
}
	