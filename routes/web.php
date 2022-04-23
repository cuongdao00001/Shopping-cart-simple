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

Route::get('/', [
    'uses'=> 'App\Http\Controllers\ProductController@getIndex',
    'as'=> 'product.index'
]);
Route::get('/add-to-cart/{id}', [
    'uses' => 'App\Http\Controllers\ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);
    Route::get('/shopping-cart', [
        'uses' => 'App\Http\Controllers\ProductController@getCart',
        'as' => 'product.shoppingCart'
]);
Route::get('/checkout', [
    'uses' => 'App\Http\Controllers\PaymentController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);
Route::post('/checkout', [
    'uses' => 'App\Http\Controllers\PaymentController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);
Route::get('/reduce/{id}', [
    'uses' => 'App\Http\Controllers\CartController@getReduce',
    'as' => 'product.reduce'
]);
Route::get('/remove/{id}', [
    'uses' => 'App\Http\Controllers\CartController@getRemove',
    'as' => 'product.remove'
]);
    Route::get('/about', [
        'uses' => 'App\Http\Controllers\UserController@getAbout',
        'as' => 'shop.about'
    ]);

Route::group(['prefix' => 'user'], function() {
    Route::group(['middleware' => 'guest'], function() {
        Route::get('/register', [
            'uses' => 'App\Http\Controllers\UserController@getRegister',
            'as' => 'user.register'
        ]);

        Route::post('/register', [
            'uses' => 'App\Http\Controllers\UserController@postRegister',
            'as' => 'user.register'
        ]);
        Route::get('/login', [
            'uses' => 'App\Http\Controllers\UserController@getLogin',
            'as' => 'user.login'
        ]);

        Route::post('/login', [
            'uses' => 'App\Http\Controllers\UserController@postLogin',
            'as' => 'user.login'
        ]);
    });
    Route::group(['middleware' => 'auth'], function() {
        Route::get('user/profile', [
            'uses' => 'App\Http\Controllers\UserController@getInfo',
            'as' => 'user.profile'
        ]);
        Route::get('/logout', [
            'uses' => 'App\Http\Controllers\UserController@getExit',
            'as' => 'user.logout'
        ]);
    });
});
