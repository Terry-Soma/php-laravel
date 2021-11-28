<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct( $var = null)
    {
        return view('admin.addproduct');
    }
    public function products( $var = null)
    {
        return view('admin.products');
    }
    public function orders()
    {
        # code...
        return view('admin.orders');
    }
}
