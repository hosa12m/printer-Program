<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartContoller extends Controller
{
    public function Show()
    {
        $posts = Cart::all(); 
        return view('navbar.cart' , compact('posts') ) ; 
    }
}
