<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return view('index');
    }
    public function PostForm(request $request){
        echo $request -> username;
        echo '<br>';
        echo $request->password;
    }
}
