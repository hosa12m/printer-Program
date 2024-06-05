<?php

namespace App\Http\Controllers;

use App\Models\ImagePost;
use Illuminate\Http\Request;
 

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = ImagePost::all(); 
        return view('index',  compact('posts')) ; 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    //public function show(array $arry)
 /*public function show(string $titel)
    {
        
    
   $imagePost= ImagePost::where('slug',  '=' , $titel)
   ->first();    
  


   if($imagePost->slug =='box'){
    return view('navbar.box') ;    
   }
     
   if($imagePost->slug =='bag'){
    return view('navbar.bag') ; 
    
}
        if($imagePost->slug =='glass'){
            return view('navbar.glass') ; 

        }

      
        if($imagePost->slug =='painting'){
            return view('navbar.painting') ; 
            
        }
        if($imagePost->slug =='banar'){
            return view('navbar.banar') ; 
            
        }

        if($imagePost->slug =='stecker'){
            return view('navbar.sticker') ; 
            
        }

    
        if($imagePost->slug =='ketm'){
            return view('navbar.ketm') ; 
            
        }
        
        if($imagePost->slug =='cart'){
            return view('navbar.cart') ; 
            
        }

        
        if($imagePost->slug =='softy'){
            return view('navbar.softy') ; 
            
        }

        if($imagePost->slug =='hold'){
            return view('navbar.hold') ; 
            
        }

        if($imagePost->slug =='teshert'){
            return view('navbar.teshert') ; 
            
        }
        if($imagePost->slug =='brashor'){
            return view('navbar.brashor') ; 
            
        }
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImagePost $imagePost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ImagePost $imagePost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImagePost $imagePost)
    {
        //
    }
}
