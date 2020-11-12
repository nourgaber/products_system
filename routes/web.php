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

Route::get('/', 'App\Http\Controllers\ProductsController@index');
Route::get('/checkout', 'App\Http\Controllers\CartController@index');
Route::get('cart', 'App\Http\Controllers\CartController@show');
Route::get('add-to-cart/{id}', 'App\Http\Controllers\CartController@addToCart');
Route::patch('update-cart', 'App\Http\Controllers\CartController@update');
Route::delete('remove-from-cart', 'App\Http\Controllers\CartController@remove');