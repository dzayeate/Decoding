<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController
{

    public function index()
    {
        return view('pages.authentication.login', [
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

           if (Auth::user()->role == 'admin') {
               return redirect()->intended('/Admin');

           } else if (Auth::user()->role == 'user') {
               return redirect()->intended('/Dashboards/Elearning');
           }

        //    return redirect('/Pages/Authentication/Login')->with('success', 'Login berhasil');


       }


    }

    public function logout (Request $request)
    {
        Auth::logout();
        $request ->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


}
