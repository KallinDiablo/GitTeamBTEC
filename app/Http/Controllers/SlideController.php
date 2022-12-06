<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    public function slide(){
        $slide = Slide::all();
        return view('fontend.index', compact("slide"));
    }
}
