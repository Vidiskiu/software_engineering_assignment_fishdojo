<?php

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

use App\Http\Controllers\ProductController;

Route::get('/', 'IndexController@show')->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/product-single/{id}', 'ProductController@show')->name('product-single');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/details', function (){
    return view('details');
})->name('details');

Route::get('post','ProductController@postRequest');
Route::get('get','ProductController@getRequest');

Auth::routes();
