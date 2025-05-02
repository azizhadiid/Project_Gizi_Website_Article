<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Akses Landing Page 
Route::get('/', function () {
    return view('welcome');
});

// Khusu User
Route::get('/beranda', [HomeController::class, 'index']);
