<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Models\Course;

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

// index routing via Route feature
Route::redirect('/', '/Landingpage/Home');

/*
|--------------------------------------------------------------------------
| Landing Page
|--------------------------------------------------------------------------
|
*/
Route::prefix('Landingpage')->group(function () {
    Route::view('/', 'landingpage/index');
    Route::view('Home', 'landingpage/index');
    Route::view('Learningpaths', 'landingpage/learning');
    Route::view('Testimonial', 'landingpage/testimonial');
    Route::view('Subscriptions', 'landingpage/subscriptions');
    Route::view('Contactus', 'landingpage/contact');
    Route::view('Aboutus', 'landingpage/aboutus');
});


/*
|--------------------------------------------------------------------------
| Course Users
|--------------------------------------------------------------------------
|
*/
Route::prefix('Course')->group(function () {
    Route::redirect('/', '/Course/Explore');
    Route::view('Explore', 'course/explore', [
        'courses' => Course::all()
    ]);
    Route::view('List', 'course/list');
    Route::view('Detail', 'course/detail');
});

/*
|--------------------------------------------------------------------------
| Dashboard Users
|--------------------------------------------------------------------------
|
*/
Route::prefix('Dashboards')->group(function () {
    Route::get('/Elearning', [UserController::class, 'index']);

    Route::prefix('Profile')->group(function () {
        Route::get('{id}/Edit', function () {
            return view('dashboards/profile/standard', [
                'user' => Auth::user()
            ]);
        });
        Route::put('{id}', [\App\Http\Controllers\ProfileController::class, 'update']);
    });
});


/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
|
*/
Route::prefix('Admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
//    Route::view('Courses', 'admin/courses');
    Route::view('Quiz', 'admin/quiz');
    Route::view('Categories', 'admin/categories');

    Route::prefix('Authentication')->group(function () {
        Route::view('Users', 'admin/authentication/users');
        Route::view('Roles', 'admin/authentication/roles');
    });

    Route::prefix('CRUD')->group(function () {
//        Route::view('Course', 'admin/crud/courses');
        Route::resource('Course', CourseController::class);
        Route::view('Quiz', 'admin/crud/quiz');
        Route::view('Categories', 'admin/crud/categories');
    });
});

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
|
*/
Route::prefix('Pages')->group(function () {
    Route::view('/', 'pages/index');

    Route::prefix('Authentication')->group(function () {
        Route::post('Register', [RegisterController::class, 'store']);
        Route::post('Login', [LoginController::class, 'authenticate']);
        Route::get('Login', [LoginController::class, 'index']);
        Route::post('Logout', [LoginController::class, 'logout']);
        Route::view('Register', 'pages/authentication/register');
        Route::view('ForgotPassword', 'pages/authentication/forgot_password');
        Route::view('ResetPassword', 'pages/authentication/reset_password');
    });
});
