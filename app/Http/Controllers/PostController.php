<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function index(){

        $post = Post::all();

        return view('create', [
            'post' => $post
        ]);
    }

    public function create(Request $request){

        $post = new Post;

        $post->title = $request->title;
        $post->description = $request->description;

        $post->save();

        return redirect('/');

        
    }
}
