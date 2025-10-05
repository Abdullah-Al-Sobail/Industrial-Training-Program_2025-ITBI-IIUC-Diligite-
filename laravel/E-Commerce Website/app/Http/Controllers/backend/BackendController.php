<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function addBrand(){
     return view('layouts.backend.brand.addBrand');
    }
    public function store(Request $request){
        // dd($request->all());
        $validate =  $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);
    }
}
