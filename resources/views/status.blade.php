@extends('templates.mainLayoutUser')

@section('title', 'Cek Status Gizi')

@section('konten')
<div class="container py-5">

    {{-- Judul Halaman --}}
    <div class="text-center mb-5" data-aos="fade-down">
        <h2 class="fw-bold" style="color: #00C48C;">Cek Status Gizi</h2>
        <p class="text-muted">Masukkan data diri untuk mengetahui status gizinya</p>
    </div>

    {{-- Form Input --}}
    <div class="card border-0 shadow-sm rounded-4 mb-5" data-aos="fade-up">
        <div class="card-body p-4">
            <form action="{{ route('status.cek') }}" method="POST">
                @csrf
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control form-control-lg rounded-3" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Umur (bulan)</label>
                        <input type="number" name="umur" class="form-control form-control-lg rounded-3" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select form-select-lg rounded-3" required>
                            <option value="" disabled selected>Pilih</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Berat Badan (kg)</label>
                        <input type="number" step="0.1" name="berat_badan"
                            class="form-control form-control-lg rounded-3" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tinggi Badan (cm)</label>
                        <input type="number" step="0.1" name="tinggi_badan"
                            class="form-control form-control-lg rounded-3" required>
                    </div>
                </div>

                <div class="text-end mt-4">
                    <button type="submit" class="btn px-4 py-2 text-white"
                        style="background: linear-gradient(135deg, #00C9A7, #005B41); border-radius: 12px; border: none;">
                        Cek Status
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Tabel Hasil --}}
    @if(isset($data))
    <div class="card border-0 shadow-sm rounded-4" data-aos="fade-up">
        <div class="card-body p-4">
            <h5 class="fw-bold mb-3 text-success">Hasil Status Gizi</h5>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <td>{{ $data['nama'] }}</td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <td>{{ $data['umur'] }} Tahun</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $data['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                </tr>
                <tr>
                    <th>Berat Badan</th>
                    <td>{{ $data['berat_badan'] }} kg</td>
                </tr>
                <tr>
                    <th>Tinggi Badan</th>
                    <td>{{ $data['tinggi_badan'] }} cm</td>
                </tr>
                <tr>
                    <th>Status Gizi</th>
                    <td class="fw-bold text-primary">{{ $status_gizi }}</td>
                </tr>
            </table>
        </div>
    </div>
    @endif

</div>
@endsection
