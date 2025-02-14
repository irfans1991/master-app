<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    // return view('welcome');
    return Inertia::render('Home');
})->name('dashboard');


// Route::get('/about', function () {
//     return inertia('About', ['name' => 'John Doe']);
// });

Route::inertia('/about', 'About', ['name' => 'John Doe', 'age' => 30])->name('about');
// Auth
Route::inertia('/auth/login', 'auth/Login')->name('login');
Route::inertia('/auth/register', 'auth/Register')->name('register');
Route::post('/auth/register', [AuthController::class, 'store'])->name('register.store');


Route::inertia('/users', 'users/User')->name('users');
Route::inertia('/create-user', 'users/CreateUser')->name('create-user');