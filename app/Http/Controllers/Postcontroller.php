<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;



class Postcontroller extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index') ->with(['posts'=>$post->getPagenateByLimit(5)]);
    }

    public function show(Post $post)
    {
        return view('posts.show')->with(['post'=> $post]);
    }
}
