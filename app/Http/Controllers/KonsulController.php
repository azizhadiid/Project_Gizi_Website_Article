<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonsulController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $konsultasi = $user->konsul;

        return view('konsul', compact('user', 'konsultasi'));
    }

    public function admin()
    {
        $konsultasis = Konsultasi::with(['user'])
            ->latest()
            ->take(10)
            ->get();

        return view('admin.konsul', compact('konsultasis'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:menunggu,disetujui,batal,selesai'
        ]);

        try {
            $konsultasi = Konsultasi::findOrFail($id);
            $konsultasi->update([
                'status' => $request->status
            ]);

            return redirect()->route('adminKonsul.index')
                ->with('success', 'Status konsultasi berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->route('adminKonsul.index')
                ->with('error', 'Gagal memperbarui status konsultasi');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_konsultasi' => 'required|string',
            'tanggal_konsultasi' => 'required|date',
            'umur' => 'required|string',
            'keluhan' => 'nullable|string',
        ], [
            'jenis_konsultasi.required' => 'Jenis konsultasi wajib dipilih.',
            'jenis_konsultasi.string' => 'Jenis konsultasi harus berupa teks.',

            'tanggal_konsultasi.required' => 'Tanggal konsultasi wajib diisi.',
            'tanggal_konsultasi.date' => 'Format tanggal konsultasi tidak valid.',

            'umur.required' => 'Umur wajib diisi.',
            'umur.string' => 'Umur harus berupa teks atau angka.',

            'keluhan.string' => 'Keluhan harus berupa teks.',
        ]);

        Konsultasi::create([
            'user_id' => Auth::id(), // ambil ID user yang sedang login
            'jenis_konsultasi' => $request->jenis_konsultasi,
            'tanggal_konsultasi' => $request->tanggal_konsultasi,
            'umur' => $request->umur,
            'keluhan' => $request->keluhan,
            'status' => 'menunggu', // default value secara eksplisit
        ]);

        return redirect()->route('konsul.index')->with('success', 'Data konsultasi berhasil dikirim.');
    }
}
