<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function Show()
    {
        //$posts = Teshert::all(); 
        return view('navbar.test' ) ; 
    }
}
