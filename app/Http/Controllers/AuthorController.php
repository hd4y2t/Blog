<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class AuthorController extends Controller
{
    //
    public function user(User $user)
    {
        return view('blog', [
            'title' => "Post by Author : $user->name",
            'posts' => $user->posts->load('category', 'user'),
            'categories' => Category::all(),
            'recent' => Post::all()->sortByDesc('id')->take(3)
        ]);
    }
}
