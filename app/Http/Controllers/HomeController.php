<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Method Untuk halaman beranda
    public function index(Request $request)
    {
        $query = Artikel::query()->where('status', 'published');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
            });
        }

        // Ambil hanya 3 artikel terbaru
        $articles = $query->latest()->take(3)->get();

        return view('beranda', compact('articles'));
    }
}
