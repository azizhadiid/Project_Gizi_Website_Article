@extends('templates.mainLayoutUser')

@section('title', 'Konsultasi')

@section('konten')
<div class="container py-5">

    {{-- Judul Halaman --}}
    <div class="text-center mb-5" data-aos="fade-down">
        <h2 class="fw-bold" style="color: #00C48C;">Konsultasi</h2>
        <p class="text-muted">Masukkan keluhan Anda dan ajukan konsultasi</p>
    </div>

    {{-- Form Input --}}
    <div class="card border-0 shadow-sm rounded-4 mb-5" data-aos="fade-up">
        <div class="card-body p-4">
            <form method="POST" action="">
                @csrf
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" id="nama" class="form-control form-control-lg rounded-3"
                            placeholder="Nama lengkap Anda" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control form-control-lg rounded-3"
                            placeholder="email@example.com" required>
                    </div>
                    <div class="col-md-6">
                        <label for="jenis" class="form-label">Jenis Konsultasi</label>
                        <select id="jenis" class="form-select form-select-lg rounded-3" required>
                            <option selected disabled>Pilih jenis konsultasi</option>
                            <option value="gizi">Konsultasi Gizi</option>
                            <option value="kesehatan">Konsultasi Kesehatan</option>
                            <option value="psikologi">Konsultasi Psikologi</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="tanggal" class="form-label">Tanggal Konsultasi</label>
                        <input type="date" id="tanggal" class="form-control form-control-lg rounded-3" required>
                    </div>
                    <div class="col-12">
                        <label for="pesan" class="form-label">Pesan / Keluhan</label>
                        <textarea id="pesan" class="form-control form-control-lg rounded-3" rows="4"
                            placeholder="Tulis pesan atau keluhan Anda..." required></textarea>
                    </div>
                </div>

                <div class="text-end mt-4">
                    <button type="submit" class="btn px-4 py-2 text-white"
                        style="background: linear-gradient(135deg, #00C9A7, #005B41); border-radius: 12px; border: none;">
                        Konsultasi
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Tabel Riwayat --}}
    {{-- @if(isset($hasil)) --}}
    <div class="card border-0 shadow-sm rounded-4" data-aos="fade-up">
        <div class="card-body p-4">
            <h5 class="fw-bold mb-3 text-success">Riwayat Konsultasi</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Konsultasi</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Amanda Putri</td>
                            <td>Konsultasi Gizi</td>
                            <td>2025-05-20</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Budi Santoso</td>
                            <td>Konsultasi Kesehatan</td>
                            <td>2025-05-21</td>
                            <td><span class="badge bg-warning text-dark">Menunggu</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    {{-- @endif --}}

</div>
@endsection
