@extends('admin.templates.mainLayoutAdmin')

@section('title', 'Konsultasi')

@section('konten')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card shadow-sm rounded-4">
            <div class="card-body">
                <div class="d-sm-flex align-items-center mb-4">
                    <h4 class="card-title text-primary mb-0">Daftar Konsultasi</h4>
                </div>

                <div class="table-responsive border rounded p-2">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Topik</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($konsultasis as $konsul)
                            <tr>
                                <td>
                                    {{ $konsul->full_name }}
                                </td>
                                <td>{{ $konsul->jenis_konsultasi }}</td>
                                <td>{{ \Carbon\Carbon::parse($konsul->tanggal_konsultasi)->translatedFormat('d F Y') }}
                                </td>
                                <td>
                                    @if($konsul->status == 'menunggu')
                                    <span class="badge bg-warning text-dark p-2 rounded-3">Menunggu</span>
                                    @elseif($konsul->status == 'disetujui')
                                    <span class="badge bg-success p-2 rounded-3">Disetujui</span>
                                    @elseif($konsul->status == 'batal')
                                    <span class="badge bg-danger p-2 rounded-3">Batal</span>
                                    @elseif($konsul->status == 'selesai')
                                    <span class="badge bg-info p-2 rounded-3">Selesai</span>
                                    @else
                                    <span class="badge bg-secondary p-2 rounded-3">Tidak Diketahui</span>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-primary" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#detailModal{{ $konsul->id }}">
                                        Lihat
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data konsultasi.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex mt-4 flex-wrap align-items-center">
                    <p class="text-muted mb-sm-0">Menampilkan 1 sampai 3 dari 27 konsultasi</p>
                    <nav class="ms-auto">
                        <ul class="pagination pagination-sm mb-sm-0">
                            <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk setiap konsultasi -->
@foreach($konsultasis as $konsul)
<div class="modal fade" id="detailModal{{ $konsul->id }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $konsul->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 20px; backdrop-filter: blur(10px);">
            
            <!-- Header with gradient -->
            <div class="modal-header border-0 text-white position-relative" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 20px 20px 0 0;">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-white bg-opacity-20 p-2 me-3">
                        <i class="fas fa-stethoscope text-white"></i>
                    </div>
                    <div>
                        <h5 class="modal-title mb-0 fw-bold" id="detailModalLabel{{ $konsul->id }}">Detail Konsultasi</h5>
                        <small class="opacity-75">{{ $konsul->full_name }}</small>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4">
                <!-- Informasi Konsultasi -->
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-4 bg-light">
                            <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-3">
                                <i class="fas fa-user text-primary"></i>
                            </div>
                            <div>
                                <small class="text-muted fw-medium">Nama Lengkap</small>
                                <p class="mb-0 fw-semibold">{{ $konsul->full_name ?? 'Tidak tersedia' }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-4 bg-light">
                            <div class="rounded-circle bg-info bg-opacity-10 p-2 me-3">
                                <i class="fas fa-envelope text-info"></i>
                            </div>
                            <div>
                                <small class="text-muted fw-medium">Email</small>
                                <p class="mb-0 fw-semibold">{{ $konsul->email ?? 'Tidak tersedia' }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-4 bg-light">
                            <div class="rounded-circle bg-warning bg-opacity-10 p-2 me-3">
                                <i class="fas fa-clipboard-list text-warning"></i>
                            </div>
                            <div>
                                <small class="text-muted fw-medium">Jenis Konsultasi</small>
                                <p class="mb-0 fw-semibold">{{ $konsul->jenis_konsultasi ?? 'Tidak tersedia' }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-4 bg-light">
                            <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                                <i class="fas fa-calendar text-success"></i>
                            </div>
                            <div>
                                <small class="text-muted fw-medium">Tanggal</small>
                                <p class="mb-0 fw-semibold">{{ $konsul->tanggal_konsultasi ? \Carbon\Carbon::parse($konsul->tanggal_konsultasi)->translatedFormat('d F Y') : 'Tidak tersedia' }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-4 bg-light">
                            <div class="rounded-circle bg-secondary bg-opacity-10 p-2 me-3">
                                <i class="fas fa-birthday-cake text-secondary"></i>
                            </div>
                            <div>
                                <small class="text-muted fw-medium">Umur</small>
                                <p class="mb-0 fw-semibold">{{ $konsul->umur ?? 'Tidak tersedia' }} tahun</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="d-flex align-items-center p-3 rounded-4 bg-light">
                            <div class="rounded-circle bg-danger bg-opacity-10 p-2 me-3">
                                <i class="fas fa-heartbeat text-danger"></i>
                            </div>
                            <div>
                                <small class="text-muted fw-medium">Status</small>
                                <div class="mt-1">
                                    @if($konsul->status == 'menunggu')
                                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">
                                        <i class="fas fa-clock me-1"></i>Menunggu
                                    </span>
                                    @elseif($konsul->status == 'disetujui')
                                    <span class="badge bg-success px-3 py-2 rounded-pill">
                                        <i class="fas fa-check-circle me-1"></i>Disetujui
                                    </span>
                                    @elseif($konsul->status == 'batal')
                                    <span class="badge bg-danger px-3 py-2 rounded-pill">
                                        <i class="fas fa-times-circle me-1"></i>Batal
                                    </span>
                                    @elseif($konsul->status == 'selesai')
                                    <span class="badge bg-info px-3 py-2 rounded-pill">
                                        <i class="fas fa-flag-checkered me-1"></i>Selesai
                                    </span>
                                    @else
                                    <span class="badge bg-secondary px-3 py-2 rounded-pill">
                                        <i class="fas fa-question me-1"></i>Tidak Diketahui
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Keluhan -->
                <div class="card border-0 mb-4" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-3">
                                <i class="fas fa-comment-medical text-primary"></i>
                            </div>
                            <h6 class="mb-0 fw-bold text-primary">Keluhan Pasien</h6>
                        </div>
                        <p class="mb-0 text-muted">{{ $konsul->keluhan ?? 'Tidak ada keluhan yang disampaikan' }}</p>
                    </div>
                </div>

                <!-- Form Update Status -->
                <div class="card border-0" style="background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                                <i class="fas fa-edit text-success"></i>
                            </div>
                            <h6 class="mb-0 fw-bold text-success">Ubah Status</h6>
                        </div>
                        
                        <form action="{{ route('adminKonsul.updateStatus', $konsul->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">
                                <div class="col-md-8">
                                    <select name="status" id="status{{ $konsul->id }}" class="form-select rounded-4 border-0 shadow-sm" style="background: rgba(255,255,255,0.7);" required>
                                        <option value="menunggu" {{ $konsul->status == 'menunggu' ? 'selected' : '' }}>
                                            🕐 Menunggu
                                        </option>
                                        <option value="disetujui" {{ $konsul->status == 'disetujui' ? 'selected' : '' }}>
                                            ✅ Disetujui
                                        </option>
                                        <option value="batal" {{ $konsul->status == 'batal' ? 'selected' : '' }}>
                                            ❌ Batal
                                        </option>
                                        <option value="selesai" {{ $konsul->status == 'selesai' ? 'selected' : '' }}>
                                            🏁 Selesai
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary w-100 rounded-4 fw-semibold shadow-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none;">
                                        <i class="fas fa-save me-2"></i>Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-light rounded-4 px-4 fw-semibold shadow-sm" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Tutup
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach

<div style="margin-top: 300px"></div>
@endsection