<?php

namespace App\Http\Controllers;

use App\Models\Banar;
use Illuminate\Http\Request;

class BanarContoller extends Controller
{
    public function Show()
    {
        $posts = Banar::all(); 
        return view('navbar.banar' , compact('posts') ) ; 
    }
}
