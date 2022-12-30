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
    return view('landingpage.index');
});

Route::get('/learningpaths', function () {
    return view('landingpage.pages.learning');
});

Route::get('/subcriptions', function () {
    return view('landingpage.pages.price');
});

Route::get('/contactus', function () {
    return view('landingpage.pages.contact');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/login', function () {
    return view('auth.login.index', [
        "title" => "Login Page",
    ]);
});

Route::get('/register', function () {
    return view('auth.register.index', [
        "title" => "Register Page",
    ]);
});

Route::get('/forgot_password', function () {
    return view('auth.forgot-password.index', [
        "title" => "Forgot Password Page",
    ]);
});

Route::get('/reset_password', function () {
    return view('auth.reset-password.index', [
        "title" => "Reset Password Page",
    ]);
});

Route::get('/profile', function () {
    return view('dashboard.profile.index', [
        "title" => "Profile",
    ]);
});

Route::get('/course', function () {
    return view('dashboard.course.index', [
        "title" => "Course",
    ]);
});

Route::get('/quiz', function () {
    return view('dashboard.quiz.index', [
        "title" => "Quiz",
    ]);
});

Route::get('/settings', function () {
    return view('dashboard.settings.index', [
        "title" => "Settings",
    ]);
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/courses', function () {
    return view('admin.courses.index', [
        "title" => "Courses",
    ]);
});

Route::get('/quis', function () {
    return view('admin.quis.index', [
        "title" => "Quis",
    ]);
});

Route::get('/crud', function () {
    return view('admin.crud.index', [
        "title" => "CRUD",
    ]);
});

Route::get('/upload', function () {
    return view('admin.upload.index', [
        "title" => "Upload",
    ]);
});

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index']);
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate']);

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'index']);

Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store']);
