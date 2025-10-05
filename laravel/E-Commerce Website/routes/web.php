<?php

use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/brand', [BackendController::class, 'addBrand'])->name('brand.add');
Route::post('/add-brand',[BackendController::class,'store'])->name('brand.store');

