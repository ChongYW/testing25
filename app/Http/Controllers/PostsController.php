<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $allPosts = Post::all();

        return view('posts.index', compact('allPosts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // dd($data);

        auth()->user()->posts()->create($data);

        return redirect('/home');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
