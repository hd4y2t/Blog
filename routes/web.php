<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'posts' => Post::all()->sortByDesc('id')->take(4)
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Hidayat',
        'email' => 'hd4y2t@gmail.com'
    ]);
});



Route::get('/blog', [PostController::class, 'index'],);
Route::get('/blog/{post:slug}', [PostController::class, 'post']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'category']);
Route::get('/authors/{user:username}', [AuthorController::class, 'user']);
