@extends('admin.templates.mainLayoutAdmin')

@section('title', 'Konsultasi')

@section('konten')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card shadow-sm rounded-4">
            <div class="card-body">
                <div class="d-sm-flex align-items-center mb-4">
                    <h4 class="card-title text-primary mb-0">Daftar Konsultasi</h4>
                    <a href="#" class="btn btn-sm btn-outline-primary ms-auto">+ Konsultasi Baru</a>
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
                                    <img class="img-sm rounded-circle me-2"
                                        src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile image">
                                    {{ $konsul->full_name }}
                                </td>
                                <td>{{ $konsul->jenis_konsultasi }}</td>
                                <td>{{ \Carbon\Carbon::parse($konsul->tanggal_konsultasi)->translatedFormat('d F Y') }}
                                </td>
                                <td>
                                    @if($konsul->status == 'menunggu')
                                    <span class="badge bg-warning text-dark p-2 rounded-3">Menunggu</span>
                                    @elseif($konsul->status == 'dijawab')
                                    <span class="badge bg-success p-2 rounded-3">Dijawab</span>
                                    @elseif($konsul->status == 'ditolak')
                                    <span class="badge bg-danger p-2 rounded-3">Ditolak</span>
                                    @else
                                    <span class="badge bg-secondary p-2 rounded-3">Tidak Diketahui</span>
                                    @endif
                                </td>
                                <td>
                                    <a href=""
                                        class="btn btn-sm btn-outline-primary">Lihat</a>
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

<div style="margin-top: 300px"></div>
@endsection
