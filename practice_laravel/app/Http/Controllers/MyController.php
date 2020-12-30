<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //membuat function untuk view beranda
    public function index() {
    	return view('beranda');
    }

    //function untuk menampilkan view about
    public function about() {
    	return view('about');
    }
}
