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
    public function index()
    {
        return view('artikel');
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


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
