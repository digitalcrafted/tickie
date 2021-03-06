<?php
use Illuminate\Support\Facades\Input;

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

Route::get('/', 'ProductController@index');
Route::get('/product/{products}/' , 'ProductController@show');
Route::get('/product/add/{products}/' , 'ProductController@store');
Route::get('/product/remove/{idToDelete}/' , 'ProductController@remove');
Route::any('/checkout-shipping/' , 'ProductController@checkout');
Route::get('/cart/' , 'CartController');
Route::any('/checkout/complete/' , 'ProductController@sendMail');
Route::get('/shop-checkout/' , function(){ return view('shop-checkout-customer' , ['cart' => session('cart' , [])]);});
Route::get('/shop-checkout-shipping/' , function(){ return view('shop-checkout-shipping' , ['cart' => session('cart' , [])]);});
Route::any('/shop-checkout-payment/' , function(){ return view('shop-checkout-payment' , ['cart' => session('cart' , []) , 'email' => session('email') , 'phone' => session('phone') , 'first_name' => session('first_name') , 'last_name' => session('last_name')]);});
