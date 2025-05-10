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
Route::get('/akun/admin', [AdminProfileController::class, 'index'])->name('admin.profile.show');
Route::post('/admin/admin', [AdminProfileController::class, 'update'])->name('admin.profile.update');

// Khusu Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'store']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register/create', [AuthController::class, 'create']);
Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::get('/reset-password', [AuthController::class, 'resetPassword']);
