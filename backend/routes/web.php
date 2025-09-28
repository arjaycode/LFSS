<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::view('/', 'auth.login');
Route::view('/admin', 'admin.login');

Route::get('/create/user/account', [UserController::class, 'create']);
Route::view('/success', 'auth.success')->name('success');

Route::prefix('/user')->group( function () {
    Route::view('/dashboard', 'dashboard.layouts.dashboard')->name('user.dashboard');
    Route::view('/notifications', '');
});

Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');

