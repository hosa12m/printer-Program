<?php

namespace App\Http\Controllers;
use Illuminate\View\View;


abstract class Controller
{
    public function home(): View
    {
        return  view('home') ; 
    }
}
