<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    public function index()
    {
        return view('dashboards.profile.standard', [
            "title" => "Profile Page",
        ]);
    }

    public function update(Request $request,User $user)
    {
        $user = Auth::user();
        $rules = [
            'name' => 'required|max:255',
            'birthday' => 'required',
            'gender' => 'nullable',
            'bio' => 'required',
            'image' => 'file|image|max:2048'
        ];

        $validatedData = $request->validate($rules);
        if($request->file('image')){
            if ($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('user-images');
        }

        $validatedData['password'] = auth()->user()->id;
        dd($validatedData);
//        User::where('id', $user->id)->update($validatedData);
//        dd('berhasil update');
    }
}
