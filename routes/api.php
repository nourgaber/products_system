<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
    Route::post('/logout', 'App\Http\Controllers\Auth\ApiAuthController@logout')->name('logout.api');
    
    Route::apiResource('users', 'App\Http\Controllers\API\UserController')->except([
        'store'
    ]);
    Route::apiResource('products','App\Http\Controllers\API\ProductController');
    

});

Route::group(['middleware' => ['cors', 'json.response']], function () {
    Route::post('/login', 'App\Http\Controllers\Auth\ApiAuthController@login')->name('login.api');
    Route::post('/register','App\Http\Controllers\Auth\ApiAuthController@register')->name('register.api');
});
