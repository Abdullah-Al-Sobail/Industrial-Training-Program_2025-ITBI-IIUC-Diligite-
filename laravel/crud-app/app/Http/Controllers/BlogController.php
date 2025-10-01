<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;



class BlogController extends Controller
{
public function __construct()
    {
        $this->middleware('auth');
    }
    public function addPost(){
        return view('layouts.backend.blog.post');
    }
    public function store(Request $request){
        $validate = $request->validate([
            'name'=>'required|max:30',
            'description'=>'required'
        ],
        [
            'name.required'=>'Name filed can not be empty',
            'max'=>'not greater than 10 char'
        ]
    );
    //mass assignment
    // $posts = Post::create([
    //     'name'=>$request->name,
    //     'description'=>$request->description,
    // ]);
    $posts = new Post();
    $posts->name = $request->name;
    $posts->description = $request->description;
    $posts->save();
    return back()->with('success','Post added successfully!');
    }

}
