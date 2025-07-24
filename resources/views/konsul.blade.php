@extends('templates.mainLayoutUser')

@section('title', 'Konsultasi')

@section('konten')
<div class="container py-5">
    @if ($errors->any())
    <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert" style="width: 100%">
        <div class="d-flex align-items-center">
            <i class="bi bi-exclamation-circle-fill me-2"></i>
            <div>
                @foreach ($errors->all() as $error)
                <p class="m-0">{{ $error }}</p>
                @endforeach
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{-- Jika Sukses Login --}}
    @if (session('success'))
    <div class="alert alert-success" style="width: 100%">
        {{ session('success') }}
    </div>
    @endif

    {{-- jika Password telah di ubah --}}
    @if (session('status'))
    <div class="alert alert-success" style="width: 100%">
        {{ session('status') }}
    </div>
    @endif

    {{-- Judul Halaman --}}
    <div class="text-center mb-5" data-aos="fade-down">
        <h2 class="fw-bold" style="color: #00C48C;">Konsultasi</h2>
        <p class="text-muted">Masukkan keluhan Anda dan ajukan konsultasi</p>
    </div>

    {{-- Form Input --}}
    <div class="card border-0 shadow-sm rounded-4 mb-5" data-aos="fade-up">
        <div class="card-body p-4">
            <form action="{{ route('konsultasi.store') }}" method="POST">
                @csrf
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" id="umur" class="form-control form-control-lg rounded-3"
                            placeholder="12" required name="umur">
                    </div>

                    <div class="col-md-6">
                        <label for="jenis" class="form-label">Jenis Konsultasi</label>
                        <select name="jenis_konsultasi" id="jenis"
                            class="form-select form-select-lg rounded-3 @error('jenis_konsultasi') is-invalid @enderror"
                            required>
                            <option disabled selected>Pilih jenis konsultasi</option>
                            <option value="gizi" {{ old('jenis_konsultasi') == 'gizi' ? 'selected' : '' }}>Konsultasi
                                Gizi</option>
                            <option value="kesehatan" {{ old('jenis_konsultasi') == 'kesehatan' ? 'selected' : '' }}>
                                Konsultasi Kesehatan</option>
                            <option value="psikologi" {{ old('jenis_konsultasi') == 'psikologi' ? 'selected' : '' }}>
                                Konsultasi Psikologi</option>
                        </select>

                        @error('jenis_konsultasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="tanggal" class="form-label">Tanggal Konsultasi</label>
                        <input type="date" id="tanggal" class="form-control form-control-lg rounded-3" required
                            name="tanggal_konsultasi">
                    </div>
                    <div class="col-12">
                        <label for="pesan" class="form-label">Pesan / Keluhan</label>
                        <textarea id="pesan" class="form-control form-control-lg rounded-3" rows="4"
                            placeholder="Tulis pesan atau keluhan Anda..." required name="keluhan"></textarea>
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
    <div class="card border-0 shadow-sm rounded-4" data-aos="fade-up">
        <div class="card-body p-4">
            <h5 class="fw-bold mb-3 text-success">Riwayat Konsultasi</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Jenis Konsultasi</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    @forelse ($konsultasi as $konsul)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ ucfirst($konsul->jenis_konsultasi) }}</td>
                        <td>{{ \Carbon\Carbon::parse($konsul->tanggal_konsultasi)->format('Y-m-d') }}</td>
                        <td>
                            @if ($konsul->status == 'selesai')
                            <span class="badge bg-success">Selesai</span>
                            @elseif ($konsul->status == 'menunggu')
                            <span class="badge bg-warning text-dark">Menunggu</span>
                            @elseif ($konsul->status == 'diproses')
                            <span class="badge bg-primary">Diproses</span>
                            @else
                            <span class="badge bg-secondary">{{ ucfirst($konsul->status) }}</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data konsultasi.</td>
                    </tr>
                    @endforelse
                </table>
            </div>

        </div>
    </div>

</div>
@endsection
