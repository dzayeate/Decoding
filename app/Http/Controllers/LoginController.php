<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController
{

    public function index()
    {
        return view('auth.login.index', [
            "title" => "Login Page ",
        ]);
    }

    public function authenticate( Request $request )
    {
       $validatedData =  $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

       if(Auth::attempt($validatedData)) {
           $request->session()->regenerate();

           return redirect('/Dashboards/')->with('success', 'Login berhasil');


       }


    }


}
