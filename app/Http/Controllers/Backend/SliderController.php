<?php

namespace App\Http\Controllers\backend;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $Slider = Slider::get();
        return view('Backend.slider.slider',[ 'slider'=>$Slider
    ]);
    }
}
