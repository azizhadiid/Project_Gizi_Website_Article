<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\AdminProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

        $articles = $query->latest()->get();

        return view('artikel', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahArtikel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $adminProfile = Auth::user()->adminProfile;

        if (!$adminProfile) {
            return redirect()->route('artikel.create')->with('warning', 'Lengkapi profil Anda sebelum mengupload artikel.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'content' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|string|max:255',
            'published_at' => 'required|string|max:255',
        ]);

        $gambarNama = null;
        if ($request->hasFile('cover_image')) {
            $gambar = $request->file('cover_image');
            $gambarNama = time() . '_' . $gambar->getClientOriginalName();

            // pastikan foldernya ada
            $destinationPath = public_path('img/admin/article');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $gambar->move($destinationPath, $gambarNama);
        }

        Artikel::create([
            'profile_admin_id' => $adminProfile->id,
            'title' => $request->title,
            'penulis' => $request->penulis,
            'content' => $request->content,
            'cover_image' => $gambarNama,
            'status' => $request->status,
            'published_at' => $request->published_at
        ]);

        return redirect()->route('artikel.create')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function show()
    {
        $articles = Artikel::with('adminProfile')->get(); // eager load relasi untuk ambil nama penulis

        return view('admin.editArtikel', compact('articles'));
    }

    public function baca($id)
    {
        $artikel = Artikel::with('adminProfile')->findOrFail($id);
        return view('detailArtikel', compact('artikel'));
    }


    public function search(Request $request)
    {
        $keyword = $request->q;

        $articles = Artikel::with('adminProfile')
            ->where('title', 'like', '%' . $keyword . '%')
            ->orWhere('penulis', 'like', '%' . $keyword . '%')
            ->get();

        return view('admin.editArtikel', compact('articles'));
    }


    // Tampilkan form edit
    public function edit($id)
    {
        $article = Artikel::findOrFail($id);
        return view('admin.formEditArtikel', compact('article'));
    }

    // Proses update
    public function updateArtikel(Request $request, $id)
    {
        $article = Artikel::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'content' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|string|max:255',
            'published_at' => 'required|string|max:255',
        ]);

        if ($request->hasFile('cover_image')) {
            $gambar = $request->file('cover_image');
            $gambarNama = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('img/admin/article'), $gambarNama);

            // hapus gambar lama
            if ($article->cover_image && file_exists(public_path('img/admin/article/' . $article->cover_image))) {
                unlink(public_path('img/admin/article/' . $article->cover_image));
            }

            $article->cover_image = $gambarNama;
        }

        $article->update([
            'title' => $request->title,
            'penulis' => $request->penulis,
            'content' => $request->content,
            'status' => $request->status,
            'published_at' => $request->published_at
        ]);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    // Proses hapus
    public function destroy($id)
    {
        $article = Artikel::findOrFail($id);

        if ($article->cover_image && file_exists(public_path('img/admin/article/' . $article->cover_image))) {
            unlink(public_path('img/admin/article/' . $article->cover_image));
        }

        $article->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
