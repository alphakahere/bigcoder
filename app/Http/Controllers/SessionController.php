<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);




        if (Auth::attempt($attributes)){
            session()->regenerate();
            return redirect('/')->with('success',"Bienvenue !"); 

        }


        return back()->withErrors([
            'email' => 'vos informations sont incorrectes'
        ]);
    }

    public function destroy() {
        Auth::logout();

        return redirect('/')->with('success', 'Aurevoir');
    }

   
}
