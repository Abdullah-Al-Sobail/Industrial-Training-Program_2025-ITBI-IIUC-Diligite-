<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
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
    $this->userData($request,$posts);
    return back()->with('success','Post added successfully!');
    }
    public function allPost(){
        $allPost = Post::select('id','name','description','slug')->get();

        return view('layouts.backend.blog.allPost',compact('allPost'));
    }

    public function editPost($id){
        // echo 'Hello';
        $post = Post::where('id',$id)->select('id','name','description')->first();

        return view('layouts.backend.blog.editPost',compact('post'));
    }

    public function updatePost(Request $request,$id){
        $validate = $request->validate([
            'name'=>'required|max:30',
            'description'=>'required'
        ]);
    $posts = Post::where('id',$id)->select('id','name','description')->first();
    $this->userData($request,$posts);
    return redirect()->route('blog.allPost')->with('success','Post Updated successfully!');
    }

    public function deletePost($id){
        $post = Post::find($id);
        if($post){
            $post->delete();
        }
        return back();
    }



    //Refactoring code
    public function userData($request,$posts){
        $posts->name = $request->name;
        $posts->description = $request->description;
        $posts->slug = Str::slug($request->name);
        $posts->save();
    }

}
