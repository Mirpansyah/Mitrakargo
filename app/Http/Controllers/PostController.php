<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\Http\Requests\PostRequest;


class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate(10),
            'rposts' => Post::latest()->paginate(5),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
