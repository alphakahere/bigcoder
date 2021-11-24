<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store() {
        $attributes = request()->validate([
            'content' => 'required',
        ]);

        dd(request()->user()->id);
        

    }
}
