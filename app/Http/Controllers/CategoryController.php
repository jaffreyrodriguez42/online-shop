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

    public function edit(Category $category)
    {
        // dd($category);
        return view('categories.edit',)->with('category', $category);
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();
    }
}
