<?php

use App\Models\Category;
use App\Models\Post;
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
    return view('posts', [
        'posts' => Post::latest()->get(),
        'categories' => Category::all(),
    ]);
});

Route::get('/posts/{post:slug}', fn(Post $post) => view('post', [
    'post' => $post
]));

Route::get(('/categories/{category:slug}'), function(Category $category){
    return view('posts', [
        'posts' => $category->posts,
        'categories' => Category::all(),
    ]);
});
