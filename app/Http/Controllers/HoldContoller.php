<?php

namespace App\Http\Controllers;

use App\Models\Hold;
use Illuminate\Http\Request;

class HoldContoller extends Controller
{
    public function Show()
    {
        $posts = Hold::all(); 
        return view('navbar.hold', compact('posts')) ; 
    }
}
