<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Slider;
class FrontendController extends Controller
{
    //
    public function index()
    {
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::orderBy('id', 'desc')->first();
        return view('frontend.index', $data);
    }
}

