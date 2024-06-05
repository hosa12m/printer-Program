<?php

namespace App\Http\Controllers;

use App\Models\Glass;
use Illuminate\Http\Request;

class GlassContoller extends Controller
{
    public function Show()
    {
        $posts = Glass::all(); 
        return view('navbar.glass' , compact('posts')) ; 
    }
}
