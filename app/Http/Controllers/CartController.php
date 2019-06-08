<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $cart = [];

        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart');
            return view('shop-cart' , ['cart' => $cart]);
        }else{
            return view('shop-cart-empty');
        }
    }
}
