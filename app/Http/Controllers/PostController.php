<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            'title' => 'Post',
            'posts' => Post::all()
        ]);
    }

    public function post($slug)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => Post::find($slug)
        ]);
    }
}
