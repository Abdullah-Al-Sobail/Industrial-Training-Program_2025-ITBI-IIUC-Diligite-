<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home',function(){
//     return view('home');
// });

Route::get('/test-page-new-test-page/{id}',[HomeController::class,'home'])->name('test');
Route::get('/blog-page',[HomeController::class,'blog'])->name('blog');

