<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.register.index', [
            "title" => "Register Page ",
        ]);
    }

    public function store(Request $request)
    {
//         Validate the request...

        $validatedData = $request->validate([
            'registerName' => 'required|max:255',
            'registerEmail' => 'required|email:dns|max:255|unique:users,email',
            'registerPassword' => 'required|min:8|max:255',
        ]);

//        return $request->all();

//         Store the user...

      $request['registerPassword'] = Hash::make($request['registerPassword']);

            User::create ([
                'name' => $request->registerName,
                'email' => $request->registerEmail,
                'password' => $request->registerPassword,
            ]);


            $request->session()->flash('success', 'Registration Succesfull! Please Login');

            return redirect('/login');

    }

}
