<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home($id){
        return view('home',compact('id'));
    }

    public function blog(){
        return view('blog',['id'=>10,'name'=>'main Page']);
    }


}
