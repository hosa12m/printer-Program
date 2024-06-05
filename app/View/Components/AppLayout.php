<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\ImagePost;

use Illuminate\Support\Collection;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public  $posts =[] ; 
    public function __construct( )
    {
        $this->posts =ImagePost::query()
        ->select('image_posts.slug')
        ->get()
        ; 

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.app');
    }
}
