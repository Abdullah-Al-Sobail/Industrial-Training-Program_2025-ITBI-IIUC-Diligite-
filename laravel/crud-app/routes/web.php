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
Route::get('/all-post',[BlogController::class,'allPost'])->name('blog.allPost');
Route::get('/post-edit/{id}',[BlogController::class,'editPost'])->name('blog.edit');
Route::PUT('/update-post/{id}',[BlogController::class,'updatePost'])->name('blog.update');
Route::delete('/delete-post/{id}',[BlogController::class,'deletePost'])->name('blog.delete');
