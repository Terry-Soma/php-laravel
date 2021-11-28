<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSlider( $var = null)
    {
        return view('admin.addslider');
    }
    public function sliders( $var = null)
    {
        return view('admin.slider');
    }

}
