<?php

namespace App\Http\Controllers;

use App\Models\Painting;
use Illuminate\Http\Request;

class PaintingContoller extends Controller
{
    public function Show()
    {
        $posts = Painting::all(); 
        return view('navbar.painting' , compact('posts')) ; 
    }
}
