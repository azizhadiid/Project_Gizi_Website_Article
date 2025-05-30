<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::today();

        $konsulHariIni = DB::table('konsul')
            ->whereDate('tanggal_konsultasi', $today)
            ->get();

        $anak = DB::table('konsul')->whereBetween('umur', [0, 12])->count();
        $remaja = DB::table('konsul')->whereBetween('umur', [13, 21])->count();
        $dewasa = DB::table('konsul')->where('umur', '>=', 22)->count();

        $totalHariIni = $anak + $remaja + $dewasa;

        $monthlyCounts = DB::table('konsul')
            ->select(DB::raw('MONTH(tanggal_konsultasi) as month'), DB::raw('COUNT(*) as total'))
            ->groupBy(DB::raw('MONTH(tanggal_konsultasi)'))
            ->orderBy(DB::raw('MONTH(tanggal_konsultasi)'))
            ->pluck('total', 'month'); // hasil: [1 => 5, 2 => 10, ...]

        // Siapkan array jumlah konsultasi dari bulan 1–12, isi 0 jika tidak ada
        $chartData = [];
        for ($i = 1; $i <= 12; $i++) {
            $chartData[] = $monthlyCounts[$i] ?? 0;
        }

        return view('admin.dashboard', compact('chartData', 'anak', 'remaja', 'dewasa', 'totalHariIni'));
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
        //
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
