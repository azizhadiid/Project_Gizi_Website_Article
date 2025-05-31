<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonsulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $konsultasi = $user->konsul;

        return view('konsul', compact('user', 'konsultasi'));
    }

    public function admin()
    {
        $konsultasis = Konsultasi::latest()->take(10)->get(); // ambil 10 data terbaru
        return view('admin.konsul', compact('konsultasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'jenis_konsultasi' => 'required|string',
            'tanggal_konsultasi' => 'required|date',
            'umur' => 'required|string',
            'keluhan' => 'nullable|string',
        ]);

        Konsultasi::create([
            'user_id' => Auth::id(), // ambil ID user yang sedang login
            'full_name' => $request->full_name,
            'email' => $request->email,
            'jenis_konsultasi' => $request->jenis_konsultasi,
            'tanggal_konsultasi' => $request->tanggal_konsultasi,
            'umur' => $request->umur,
            'keluhan' => $request->keluhan,
            'status' => 'menunggu', // default value secara eksplisit
        ]);

        return redirect()->route('konsul.index')->with('success', 'Data konsultasi berhasil dikirim.');
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
