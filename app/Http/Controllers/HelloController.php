<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
    	// ini adalah  variabel array dengan index nama
    	//$data['nama']	= 'Lorem Ipsum 123';
    	$nama = 'Sit Dolor Amet';
    	// panggil view dengan attach variabel $data
    	return view('hello' , compact('nama'));
    }
    public function contoh_bootstrap()
    {
    	return view('contoh_bs');
    }
}
