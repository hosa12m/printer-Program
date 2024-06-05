<?php

namespace App\Http\Controllers;

use App\Models\Ketem;
use Illuminate\Http\Request;

class KetmContoller extends Controller
{
    public function Show()
    {
        $posts = Ketem::all(); 
        return view('navbar.ketem' , compact('posts')) ; 
    }
}
