<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function addCategory($var = null)
    {
        return view('admin.addcategory');
    }
    public function categories($var = null)
    {
        return view('admin.categories');
    }
    public function savecategory(Request $request)
    {

    }
}
