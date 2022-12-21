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
        $request->validate([
            'registerEmail' => 'required|email:dns',
            'registerPassword' => 'required',
        ]);

        dd('login success');
    }


}
