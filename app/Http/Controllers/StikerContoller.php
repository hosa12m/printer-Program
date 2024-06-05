<?php

namespace App\Http\Controllers;

use App\Models\Steker;
use Illuminate\Http\Request;

class StikerContoller extends Controller
{
    public function Show()
    { 
        $posts = Steker::all(); 
        return view('navbar.sticker' , compact('posts')) ; 
    }
}
