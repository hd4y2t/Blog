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
        $posts = Post::latest();
        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }
        return view('blog', [
            'title' => 'Blog',
            'posts' => $posts->get(),
            'categories' => Category::all(),
            'recent' => Post::all()->sortByDesc('id')->take(3)
        ]);
    }

    public function post(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $post,
            'categories' => Category::all(),
            'recent' => Post::all()->sortByDesc('id')->take(3)
        ]);
    }
}
