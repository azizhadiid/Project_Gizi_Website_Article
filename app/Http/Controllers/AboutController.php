<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Method untuk halaman tentang
    public function index()
    {
        return view('about');
    }
}
