<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AuthController;

// Route utama menampilkan daftar pegawai
Route::get('/', [PegawaiController::class, 'index'])->name('home');

// CRUD Pegawai
Route::resource('pegawai', PegawaiController::class);
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');

// Profile page
Route::view('/profile', 'profile');

// Login & Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
