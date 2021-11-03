<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' di ' . $category['name'];
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' dari ' . $author['name'];
        }
        return view('blog', [
            'title' => 'Semua Postingan' . $title,
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
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
