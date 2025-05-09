<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ArtikelController;

// Akses Landing Page 
Route::get('/', function () {
    return view('welcome');
});

// Khusu User
Route::get('/beranda', [HomeController::class, 'index']);
Route::get('/akun', [AkunController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index']);

// Khusu Admin
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/akun/admin', [AdminProfileController::class, 'index']);

// Khusu Auth
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::get('/reset-password', [AuthController::class, 'resetPassword']);
