<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class indexController extends Controller
{
    public function index()

    {

        $products = Product::paginate(105);

        return view('fontend.index', compact("products"));
        
    }

    public function detail($id)
    {
        $product_id = Product::find($id);
        return view('fontend.product_detail' ,['product_id'=>$product_id]);
    }

}

