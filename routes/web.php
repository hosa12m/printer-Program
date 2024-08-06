<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoxContoller ; 
use App\Http\Controllers\BagContoller ;
use App\Http\Controllers\GlassContoller ;
use App\Http\Controllers\PaintingContoller ;
use App\Http\Controllers\BanarContoller ;
use App\Http\Controllers\StikerContoller ;
use App\Http\Controllers\KetmContoller ;
use App\Http\Controllers\CartContoller ;
use App\Http\Controllers\SoftContoller ;
use App\Http\Controllers\HoldContoller ;
use App\Http\Controllers\TeshertContoller ;
use App\Http\Controllers\BrashorContoller ;

use App\http\Controller\TestController ; 




// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [ImageController::class , 'index'])->name('home') ; 

Route::get('/test', [App\Http\Controllers\TestController::class , 'show'])->name('test') ; 
//Route::get('/{post:slug}', [ImageController::class, 'show'])->name('view') ;


Route::get('/box', [BoxContoller::class, 'show'])->name('box') ;
Route::get('/bag', [BagContoller::class, 'show'])->name('bag') ;
Route::get('/glass', [GlassContoller::class, 'show'])->name('glass') ;
Route::get('/painting', [PaintingContoller::class, 'show'])->name('painting') ;
Route::get('/banar', [BanarContoller::class, 'show'])->name('banar') ;
Route::get('/steker', [StikerContoller::class, 'show'])->name('steker') ;
Route::get('/ketem', [KetmContoller::class, 'show'])->name('ketm') ;
Route::get('/cart', [CartContoller::class, 'show'])->name('cart') ;
Route::get('/softy', [SoftContoller::class, 'show'])->name('softy') ;
Route::get('/hold', [HoldContoller::class, 'show'])->name('hold') ;
Route::get('/teshert', [TeshertContoller::class, 'show'])->name('teshert') ;
Route::get('/brashor', [BrashorContoller::class, 'show'])->name('brashor') ;



