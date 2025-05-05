<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Akses Landing Page 
Route::get('/', function () {
    return view('welcome');
});

// Khusu User
Route::get('/beranda', [HomeController::class, 'index']);
Route::get('/akun', [AkunController::class, 'index']);

// Khusu Admin
Route::get('/dashboard', [AdminController::class, 'index']);

// Khusu Auth
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::get('/reset-password', [AuthController::class, 'resetPassword']);
