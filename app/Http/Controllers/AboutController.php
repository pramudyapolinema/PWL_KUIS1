<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class AboutController extends Controller
{
    public static function index(){
        return view('about', ['pegawai' => Pegawai::index()]);
    }
}
