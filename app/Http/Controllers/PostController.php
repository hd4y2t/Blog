<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            'title' => 'All Posts',
            // 'posts' => Post::all()
            'posts' => Post::latest()->get()
        ]);
    }

    public function post(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
