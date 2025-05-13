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

    {{-- Search Bar --}}
    <form action="{{ route('user.artikel') }}" method="GET" class="mb-5">
        <div class="input-group shadow-sm rounded-pill overflow-hidden" style="background: #f9f9f9;">
            <input type="text" name="search" class="form-control border-0 px-4 py-3 bg-transparent"
                placeholder="🔍 Cari artikel menarik hari ini..." value="{{ request('search') }}"
                style="font-size: 1rem;">
            <button class="btn btn-dark px-4 rounded-0" type="submit"
                style="background: linear-gradient(135deg, #00C9A7, #005B41); border: none;">
                Cari
            </button>
        </div>
    </form>

    {{-- No Results --}}
    @if($articles->isEmpty())
    <div class="col-12 d-flex justify-content-center align-items-center flex-column py-5" data-aos="fade-up">
        <img src="{{ asset('assets/img/illustration/no-results.svg') }}" alt="No Results" class="mb-4"
            style="max-width: 280px;">
        <h5 class="text-dark fw-bold mb-2">Ups! Artikel tidak ditemukan</h5>
        <p class="text-muted mb-0">Coba kata kunci lain yang lebih spesifik atau populer.</p>
    </div>
    @endif

    {{-- Article Cards --}}
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($articles as $article)

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="fade-up"
            style="transition: transform 0.3s ease-in-out;">
            <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                <img src="{{ asset('img/admin/article/' . $article->cover_image) }}" class="card-img-top" alt="Judul Artikel 2"
                    style="height: 220px; object-fit: cover;" alt="{{ $article->title }}">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-3">
                        <h5 class="card-title fw-semibold text-dark">
                            <a href="#" class="text-decoration-none text-dark hover-text-primary">{{ $article->title }}</a>
                        </h5>
                        <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit(strip_tags($article->content), 90) }}</p>
                    </div>
                    <div
                        class="card-footer bg-white border-0 d-flex justify-content-between align-items-center px-0 pb-0 border-top pt-3">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-light d-flex justify-content-center align-items-center me-2"
                                style="width: 40px; height: 40px;">
                                <i class="bi bi-person text-secondary"></i>
                            </div>
                            <div>
                                <small class="text-muted">{{ $article->penulis ?? 'Admin' }}</small><br>
                                <small class="text-muted">{{ \Carbon\Carbon::parse($article->published_at)->translatedFormat('d M Y') }}</small>
                            </div>
                        </div>
                        <a href="#" class="btn btn-sm text-white"
                            style="background: linear-gradient(135deg, #00C9A7, #005B41); border-radius: 10px;">
                            Baca
                        </a>
                    </div>
                </div>
            </div>
        </div> 
        @endforeach
    </div>
</div>
<!-- ========================= End Artikel Cards ========================= -->
@endsection
