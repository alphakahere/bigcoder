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
        'posts' => Post::all(),
    ]);
});

Route::get('/posts/{id}', fn($id) => view('post', [
    'post' => Post::find($id)
]));

Route::get(('/categories/{category:id}'), function(Category $category){
    return view('posts', [
        'posts' => $category->posts,
    ]);
});
