<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public static function index(){
        return view('product', ['produk' => Product::index()]);
    }
}
