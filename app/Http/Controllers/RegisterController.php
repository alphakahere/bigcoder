<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required | max: 50',
            'pseudo' => 'required | max: 20 | unique:users,pseudo',
            'email' => 'required | max:50 | unique:users,email',
            'password' => 'required | max:50 | min:8'
        ]);

        $user =  new User;
        
        $user->name = $request->input('name');
        $user->pseudo = $request->input('pseudo');
        $user->email =  $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();

        return redirect("/login")->with([
            'message' => 'Votre compte a été crée avec success',
        ]);
    }
}
