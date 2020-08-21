<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductController@index');

Route::post('/products', 'ProductController@store');

Route::get('/products/create', 'ProductController@create');

Route::get('/products/{product}', 'ProductController@show');

Route::get('/categories', 'CategoryController@index');

Route::get('/categories/{category}/edit', 'CategoryController@edit');

Route::get('/categories/{category}', 'CategoryController@show');

Route::put('/categories/{category}', 'CategoryController@update');