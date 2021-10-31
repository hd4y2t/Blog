<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            'title' => 'Blog',
            'posts' => Post::latest()->get(),
            'categories' => Category::all()
        ]);
    }

    public function post(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $post,
            'categories' => Category::all(),
            'posts' => Post::all()->sortByDesc('id')->take(3)
        ]);
    }
}
