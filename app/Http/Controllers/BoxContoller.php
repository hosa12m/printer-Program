<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Http\Request;

class BoxContoller extends Controller
{
    public function Show()
    {
        $posts = Box::all(); 
        return view('navbar.box' , compact('posts')) ; 
    }
        
    
    //
}
