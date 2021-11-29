<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post) {
        $attributes = request()->validate([
            'content' => 'required',
        ]);

        // dd(request()->user()->id);

        // $post->comments->create([
        //     'user_id' => request()->user()->id,
        //     'content' => request('content')
        // ]) ;    

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'content' => request('content')
        ]);
        
        return back();
        
    }
}
