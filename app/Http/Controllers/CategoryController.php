<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function category(Category $category)
    {
        return view('blog', [
            'title' => "Post by Category : $category->name",
            'posts' => $category->posts->load('category', 'user'),
            'categories' => Category::all(),
            'recent' => Post::all()->sortByDesc('id')->take(3)
        ]);
    }
}
