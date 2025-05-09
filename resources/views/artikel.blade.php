@extends('templates.mainLayoutUser')

@section('title', 'Artikel')

@section('konten')

<!-- ========================= Page Title ========================= -->
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Artikel GIZIKU<br></h1>
                    <p class="mb-0">Giziku berkomitmen untuk menghadirkan informasi dan solusi gizi terbaik. Kami
                        percaya bahwa pola makan sehat adalah kunci menuju kehidupan yang lebih baik. Temukan berbagai
                        tips, artikel, dan panduan yang membantu kamu meraih kesehatan optimal.</p>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Page Title -->
<!-- ========================= End Page Title ========================= -->

<!-- ========================= Artikel Cards ========================= -->
<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-2 g-4">

        <!-- Card Artikel 1 -->
        <div class="col">
            <div class="card h-100 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('assets/img/course-2.jpg') }}" class="card-img-top" alt="Gambar Artikel 1">
                <div class="card-body">
                    <p class="text-muted mb-1">Kategori: <span class="badge bg-secondary">Gizi</span></p>
                    <h5 class="card-title">Judul Artikel Pertama</h5>
                    <p class="card-text">Deskripsi singkat artikel ini. Memberikan informasi penting mengenai topik gizi yang dibahas.</p>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <img src="{{ asset('assets/img/person/person-f-12.webp') }}" class="rounded-circle me-2" width="40" height="40" alt="Penulis">
                    <div>
                        <small class="text-muted">Maria Doe</small><br>
                        <small class="text-muted">1 Jan 2022</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Artikel 2 -->
        <div class="col">
            <div class="card h-100 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('assets/img/course-3.jpg') }}" class="card-img-top" alt="Gambar Artikel 2">
                <div class="card-body">
                    <p class="text-muted mb-1">Kategori: <span class="badge bg-secondary">Gaya Hidup</span></p>
                    <h5 class="card-title">Judul Artikel Kedua</h5>
                    <p class="card-text">Artikel ini membahas hubungan antara gaya hidup sehat dan pemenuhan kebutuhan nutrisi harian.</p>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <div>
                        <small class="text-muted">Allisa Mayer</small><br>
                        <small class="text-muted">5 Jun 2022</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tambahkan card lainnya sesuai kebutuhan -->

    </div>
</div>
<!-- ========================= End Artikel Cards ========================= -->
@endsection
