<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function home()
    {
        return view('client.home');
    }
    public function shop()
    {
        return view('client.shop');
    }
    public function cart()
    {
        return view('client.cart');
    }
    public function checkout( $var = null)
    {
        return view('client.checkout');
    }
    public function login($l = null)
    {
     return view('client.login');   # code...
    }
    public function signup($l = null)
    {
     return view('client.signup');   # code...
    }
}
