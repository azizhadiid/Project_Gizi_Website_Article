@extends('admin.templates.mainLayoutAdmin')

@section('title', 'Dashboard')

@section('konten')

<div class="row">
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body performane-indicator-card">
                <div class="d-sm-flex">
                    <h4 class="card-title flex-shrink-1">Jumlah Konsultasi Gizi</h4>
                </div>
                <div class="d-sm-flex flex-wrap mt-3">
                    <div class="d-flex align-items-center">
                        <span class="dot-indicator bg-primary ms-2"></span>
                        <p class="mb-0 ms-2 text-muted font-weight-semibold">Anak-anak ({{ $anak }})</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="dot-indicator bg-info ms-2"></span>
                        <p class="mb-0 ms-2 text-muted font-weight-semibold"> Remaja ({{ $remaja }})</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="dot-indicator bg-danger ms-2"></span>
                        <p class="mb-0 ms-2 text-muted font-weight-semibold">Dewasa ({{ $dewasa }})</p>
                    </div>
                </div>

                <div class="dotted-chart-height">
                    <canvas id="performance-indicator-chart" style="height: 400px; margin-top: 30px;"></canvas>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <script>
                    const chartData = @json($chartData); // hasil dari controller

                    window.addEventListener('DOMContentLoaded', () => {
                        const ctx = document.getElementById('performance-indicator-chart');
                        if (ctx) {
                            new Chart(ctx.getContext('2d'), {
                                type: 'bar',
                                data: {
                                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug',
                                        'Sep', 'Oct', 'Nov', 'Dec'
                                    ],
                                    datasets: [{
                                        label: 'Jumlah Konsultasi',
                                        data: chartData,
                                        backgroundColor: '#42d8e8',
                                        barThickness: 12,
                                        borderRadius: 6
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    maintainAspectRatio: false,
                                    scales: {
                                        x: {
                                            grid: {
                                                display: false
                                            },
                                            ticks: {
                                                font: {
                                                    size: 14,
                                                    weight: '500'
                                                }
                                            }
                                        },
                                        y: {
                                            beginAtZero: true,
                                            grid: {
                                                color: '#e0e0e0',
                                                borderDash: [4, 4]
                                            },
                                            ticks: {
                                                font: {
                                                    size: 12
                                                }
                                            }
                                        }
                                    },
                                    plugins: {
                                        legend: {
                                            display: false
                                        }
                                    }
                                }
                            });
                        }
                    });

                </script>

            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pendaftar Konsultasi Hari Ini</h4>
                <!-- CDN Chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <!-- Donut Chart Canvas -->
                <div class="doughnut-chart-height position-relative" style="height: 210px; margin-top: 40px;">
                    <canvas id="sessionsDoughnutChart"></canvas>
                    <!-- Text in the middle -->
                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                        <h2 class="mb-0 fw-bold">{{ number_format($totalHariIni) }}</h2>
                        <small class="text-muted fw-semibold">Total Konsulatsi</small>
                    </div>
                </div>

                <!-- Donut Chart Script -->
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const ctx = document.getElementById('sessionsDoughnutChart');

                        if (ctx) {
                            new Chart(ctx, {
                                type: 'doughnut',
                                data: {
                                    labels: ['Anak-anak', 'Remaja', 'Dewasa'],
                                    datasets: [{
                                        data: [{{ $anak }}, {{ $remaja }}, {{ $dewasa }}],
                                        backgroundColor: ['#ec4e62', '#6dd230', '#fdd762'],
                                        borderWidth: 0,
                                        hoverOffset: 6
                                    }]
                                },
                                options: {
                                    cutout: '70%', // membuat donat lebar
                                    responsive: true,
                                    maintainAspectRatio: false,
                                    plugins: {
                                        legend: {
                                            display: false // kita buat legenda custom di bawah
                                        },
                                        tooltip: {
                                            callbacks: {
                                                label: function (context) {
                                                    return `${context.label}: ${context.parsed} orang`;
                                                }
                                            }
                                        }
                                    }
                                }
                            });
                        }
                    });
                </script>

                <!-- Custom Legend -->
                <div class="mt-4 d-flex justify-content-center gap-4 flex-wrap">
                    <div class="d-flex align-items-center">
                        <span class="square-indicator me-2" style="width: 12px; height: 12px; background-color: #ec4e62;"></span>
                        <span class="text-muted fw-semibold">Anak-anak</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="square-indicator me-2" style="width: 12px; height: 12px; background-color: #6dd230;"></span>
                        <span class="text-muted fw-semibold">Remaja</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="square-indicator me-2" style="width: 12px; height: 12px; background-color: #fdd762;"></span>
                        <span class="text-muted fw-semibold">Dewasa</span>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
<!-- Quick Action Toolbar Starts-->
<div class="row quick-action-toolbar">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-header d-block d-md-flex">
                <h5 class="mb-0">Akses Cepat</h5>
                <p class="ms-auto mb-0">Bagaimana tren pengguna aktif Anda dari waktu ke waktu?<i class="icon-bulb"></i>
                </p>
            </div>
            <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                    <a href="/admin/artikel/tambah" class="btn px-0"> <i class="icon-docs me-2"></i>Menambahkan
                        Artikel</a>
                </div>
                <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                    <a href="/admin/artikel/edit" class="btn px-0"><i class="icon-docs me-2"></i> Riview Artikel
                        Gizi</a>
                </div>
                <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                    <a href="/admin/konsul" class="btn px-0"><i class="icon-folder me-2"></i> Manajemen
                        Konsultasi</a>
                </div>
                <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                    <a href="/admin/konsul" class="btn px-0"><i class="icon-book-open me-2"></i>Verifikasi
                        Konsulatsi</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick Action Toolbar Ends-->
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card shadow-sm rounded-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="fw-semibold text-primary">Ringkasan Gizi</h5>
                            <div class="d-flex align-items-center">
                                <span class="text-muted me-2">Terakhir diperbarui</span>
                                <button class="btn btn-light btn-sm rounded-circle p-2">
                                    <i class="icon-refresh"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row report-inner-cards-wrapper">
                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded-4 shadow-sm">
                            <div>
                                <span class="text-muted">Total Anak Terdata</span>
                                <h4 class="fw-bold">1,234</h4>
                                <span class="text-success">+12 Hari Ini</span>
                            </div>
                            <div class="bg-primary text-white p-3 rounded-circle">
                                <i class="icon-people"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded-4 shadow-sm">
                            <div>
                                <span class="text-muted">Anak Gizi Buruk</span>
                                <h4 class="fw-bold text-danger">58</h4>
                                <span class="text-muted">Perlu perhatian</span>
                            </div>
                            <div class="bg-danger text-white p-3 rounded-circle">
                                <i class="icon-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded-4 shadow-sm">
                            <div>
                                <span class="text-muted">Anak Gizi Normal</span>
                                <h4 class="fw-bold text-success">1,050</h4>
                                <span class="text-muted">Data stabil</span>
                            </div>
                            <div class="bg-success text-white p-3 rounded-circle">
                                <i class="icon-check"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded-4 shadow-sm">
                            <div>
                                <span class="text-muted">Data Belum Lengkap</span>
                                <h4 class="fw-bold text-warning">126</h4>
                                <span class="text-muted">Perlu verifikasi</span>
                            </div>
                            <div class="bg-warning text-white p-3 rounded-circle">
                                <i class="icon-exclamation"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card shadow-sm rounded-4">
            <div class="card-body">
                <div class="d-sm-flex align-items-center mb-4">
                    <h4 class="card-title mb-sm-0 text-primary">Data Konsultasi</h4>
                    <a href="/admin/konsul" class="text-muted ms-auto mb-3 mb-sm-0">Lihat Semua</a>
                </div>

                <div class="table-responsive border rounded p-2">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama Pengirim</th>
                                <th>Topik</th>
                                <th>Tanggal Konsultasi</th>
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
                                <td>Masalah Nafsu Makan</td>
                                <td>24 Mei 2025</td>
                                <td><span class="badge bg-warning text-dark p-2 rounded-3">Menunggu</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="img-sm rounded-circle me-2" src="assets/images/faces/face2.jpg"
                                        alt="profile image">
                                    Pak Budi
                                </td>
                                <td>Stunting & Pertumbuhan</td>
                                <td>23 Mei 2025</td>
                                <td><span class="badge bg-success p-2 rounded-3">Dijawab</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="img-sm rounded-circle me-2" src="assets/images/faces/face3.jpg"
                                        alt="profile image">
                                    Ibu Lina
                                </td>
                                <td>Menu MPASI Sehat</td>
                                <td>22 Mei 2025</td>
                                <td><span class="badge bg-danger p-2 rounded-3">Ditolak</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-secondary">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="img-sm rounded-circle me-2" src="assets/images/faces/face4.jpg"
                                        alt="profile image">
                                    Ibu Nani
                                </td>
                                <td>Cek Gizi Anak</td>
                                <td>21 Mei 2025</td>
                                <td><span class="badge bg-success p-2 rounded-3">Dijawab</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Lihat</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex mt-4 flex-wrap align-items-center">
                    <p class="text-muted mb-sm-0">Menampilkan 1 sampai 4 dari 57 konsultasi</p>
                    <nav class="ms-auto">
                        <ul class="pagination pagination-sm mb-sm-0">
                            <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                            <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
