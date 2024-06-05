<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use Illuminate\Http\Request;

class BagContoller extends Controller
{
    public function Show()
    {

        $posts = Bag::all(); 
        return view('navbar.bag' , compact('posts') ) ; 
    }
}
