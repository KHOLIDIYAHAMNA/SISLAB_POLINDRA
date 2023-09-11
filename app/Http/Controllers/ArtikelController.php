<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    function view($slug){
     
        return view('artikel', compact('slug'));
    }
}
