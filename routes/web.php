<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/login', function () {
    return view('auth.login.index', [
        "title" => "Login Page ",
    ]);
});

Route::get('/register', function () {
    return view('auth.register.index', [
        "title" => "Register Page ",
    ]);
});

Route::get('/forgot_password', function () {
    return view('auth.forgot-password.index', [
        "title" => "Forgot Password Page ",
    ]);
});

Route::get('/reset_password', function () {
    return view('auth.reset-password.index', [
        "title" => "Reset Password Page ",
    ]);
});

Route::get('/profile', function () {
    return view('dashboard.profile.index', [
        "title" => "Profile  ",
    ]);
});
