<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    //
    public function index() 
    {
        return view('posts.index');
    }

    public function show() 
    {
        return view('posts.show');
    }

    public function create() 
    {
        return view('posts.create');
    }

    public function store() 
    {
        // create a new post using request data

        // dd(request()->all());

        $post = new Post;

        $post->title = request('title');
        $post->body = request('body');

        // store it in db

        $post->save();

        // another approach to save to db
        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        // redirect to that post or homepage
        
        return redirect('/');

    }
}
