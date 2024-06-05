<?php

namespace App\Http\Controllers;

use App\Models\Teshert;
use Illuminate\Http\Request;

class TeshertContoller extends Controller
{
    public function Show()
    {
        $posts = Teshert::all(); 
        return view('navbar.teshert' , compact('posts')) ; 
    }
}
