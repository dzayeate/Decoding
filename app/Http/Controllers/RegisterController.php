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
            'name' => 'required|max:255',
            'email' => 'required|email:dns|max:255|unique:users,email',
            'password' => 'required|min:8|max:255',
        ]);

//        return $request->all();

//         Store the user...

      $validatedData['password'] = Hash::make($request['password']);


            User::create($validatedData);

//            dd('registrasi success');

            return redirect('Pages/Authentication/Login')->with('success', 'Registrasi berhasil');

    }

}
