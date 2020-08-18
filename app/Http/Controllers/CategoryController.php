<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
    	// dd($categories);
    	return view('categories.index', compact('categories'));
    	
    }

    public function show(Category $category)
    {
    	// dd($category);
    	$products = $category->products()->get();
    	// dd($products);
    	return view('categories.show', compact('products'))->with('category', $category);
    }
}
