<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request){
        // dd($request);
        $validateData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'published_at' => 'required'
        ]); 
        
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->published_at = $request->published_at;

        $post->save();
        return redirect('home');
        //echo $request -> title;
        //echo $request -> body;
        //echo $request -> published_at;

    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    

    
}
