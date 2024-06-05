<?php

namespace App\Http\Controllers;

use App\Models\Brashor;
use Illuminate\Http\Request;

class BrashorContoller extends Controller
{
    public function Show()
    {
        $posts = Brashor::all(); 
        return view('navbar.brashor', compact('posts')) ; 
    }
}
