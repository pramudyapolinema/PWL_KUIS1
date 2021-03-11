<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public static function index(){
        return view('pelanggan', ['pelanggan' => Pelanggan::index()]);
    }
}
