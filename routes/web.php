<?php

use Illuminate\Support\Facades\Route;
use App\Models\Products;
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


//initial routing
Route::get('/', 'App\Http\Controllers\ProductsController@index');
//product routing
Route::get('product', 'App\Http\Controllers\ProductsController@index');
//Cart Routing
Route::get('cart', 'App\Http\Controllers\ProductsController@cart');

Route::get('add-to-cart/{id}', 'App\Http\Controllers\ProductsController@addToCart');
//order Routing
Route::get('order', 'App\Http\Controllers\ProductsController@order');

Route::get('add-to-order/{id}', 'App\Http\Controllers\ProductsController@addToOrder');
