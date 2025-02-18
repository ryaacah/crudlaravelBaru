<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AuthController;

Route::get('/', [PegawaiController::class, 'index'])->name('home');

// CRUD Pegawai
Route::resource('pegawai', PegawaiController::class);
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');

// Profile
Route::view('/profile', 'profile');

// Login & Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
