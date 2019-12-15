<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class IndexController extends Controller
{
    public function show(){
        $products = Product::orderBy('created_at', 'desc')->groupBy('id')->get();
        return view('index', ['products' => $products]);
    }
}
