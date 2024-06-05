<?php

namespace App\Http\Controllers;

use App\Models\Softy;
use Illuminate\Http\Request;

class SoftContoller extends Controller
{
    public function Show()
    {
        $posts = Softy::all(); 
        return view('navbar.softy' , compact('posts')) ; 
    }
}
