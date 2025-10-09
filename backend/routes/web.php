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
    Route::view('/dashboard', 'user.layouts.dashboard')->name('user.dashboard');
    Route::view('/notifications', 'user.layouts.notifications')->name('user.notifications');
    Route::view('/my-reports', 'user.layouts.my_reports')->name('user.my_reports');
    Route::view('/report-lost', 'user.layouts.report_lost')->name('user.report_lost');
    Route::view('/my-claims', 'user.layouts.my_claims')->name('user.my_claims');
});

Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');

