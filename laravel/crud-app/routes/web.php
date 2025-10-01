<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add-post',[BlogController::class,'addPost'])->name('blog.add');
Route::POST('/store-post',[BlogController::class,'store'])->name('blog.store');

