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
                                <th>Nama Orang Tua</th>
                                <th>Topik</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img class="img-sm rounded-circle me-2" src="assets/images/faces/face1.jpg"
                                        alt="profile image">
                                    Ibu Siti
                                </td>
                                <td>Gizi Anak Kurus</td>
                                <td>25 Mei 2025</td>
                                <td><span class="badge bg-warning text-dark p-2 rounded-3">Menunggu</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-info">Detail</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="img-sm rounded-circle me-2" src="assets/images/faces/face2.jpg"
                                        alt="profile image">
                                    Pak Ahmad
                                </td>
                                <td>MPASI untuk Bayi 6 Bulan</td>
                                <td>24 Mei 2025</td>
                                <td><span class="badge bg-success p-2 rounded-3">Dijawab</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-info">Detail</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="img-sm rounded-circle me-2" src="assets/images/faces/face3.jpg"
                                        alt="profile image">
                                    Ibu Dewi
                                </td>
                                <td>Stunting & Gizi Buruk</td>
                                <td>22 Mei 2025</td>
                                <td><span class="badge bg-danger p-2 rounded-3">Ditolak</span></td>
                                <td><a href="#" class="btn btn-sm btn-outline-secondary">Lihat Alasan</a></td>
                            </tr>
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
