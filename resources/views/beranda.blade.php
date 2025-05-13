@extends('templates.mainLayoutUser')

@section('title', 'Beranda')

@section('konten')
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <img src="{{ asset('assets/img/food-bg.jpg')}}" alt="" data-aos="fade-in">

    <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100">Makan Sehat Hari Ini,<br>Hidup Lebih Baik Esok</h2>
        <p data-aos="fade-up" data-aos-delay="200">Kami adalah tim ahli gizi yang berdedikasi memberikan
            informasi <br>tentang pola makan sehat dan bergizi.</br></p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
            <a href="{{url('/login')}}" class="btn-get-started">Pelajari Lebih Lanjut</a>
        </div>
    </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                <h3>Menjaga Gizi Seimbang untuk Tubuh yang Lebih Sehat</h3>
                <p class="fst-italic">
                    Memahami kebutuhan nutrisi harian Anda dapat membantu meningkatkan kualitas hidup secara
                    keseluruhan.
                </p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>Makan beragam jenis makanan untuk mendapatkan
                            nutrisi lengkap.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Batasi konsumsi gula, garam, dan lemak
                            berlebih.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Minum air putih yang cukup untuk menjaga
                            hidrasi tubuh sepanjang hari.</span></li>
                </ul>
                <a href="{{url('/login')}}" class="read-more"><span>Pelajari Lebih Lanjut</span><i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>

    </div>

</section><!-- /About Section -->

<!-- Why Us Section -->
<section id="why-us" class="section why-us light-background">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-box">
                    <h3>Kenapa Pilih Informasi Kami?</h3>
                    <p>
                        Kami menyediakan panduan yang terpercaya tentang kebutuhan gizi, tips makan sehat, dan
                        cara menjalani gaya hidup yang lebih baik. Temukan sumber nutrisi yang tepat untuk
                        keluarga Anda.
                    </p>
                    <div class="text-center">
                        <a href="{{url('/login')}}" class="more-btn"><span>Pelajari Lebih Lanjut</span> <i
                                class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div><!-- End Why Box -->

            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-xl-4">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-bar-chart-line"></i>
                            <h4>Memahami Kebutuhan Gizi</h4>
                            <p>Bagaimana memenuhi kebutuhan harian Anda untuk kesehatan tubuh.</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-nut"></i>
                            <h4>Makanan Bergizi Berkualitas</h4>
                            <p>Temukan sumber makanan terbaik yang kaya akan vitamin, mineral, dan serat.</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-heart-pulse"></i>
                            <h4>Tips Hidup Sehat</h4>
                            <p>Dapatkan tips praktis untuk menjaga pola makan sehat yang mudah diterapkan
                                sehari-hari.
                            </p>
                        </div>
                    </div><!-- End Icon Box -->

                </div>
            </div>

        </div>

    </div>

</section><!-- /Why Us Section -->

<!-- Features Section -->
<section id="features" class="features section">
    <div class="container">
        <div class="row gy-4">

            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="features-item">
                    <i class="bi bi-journal-text" style="color: #ffbb2c;"></i> <!-- Artikel Gizi -->
                    <h3><a href="" class="stretched-link">Artikel Gizi</a></h3>
                </div>
            </div><!-- End Feature Item -->

            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="features-item">
                    <i class="bi bi-clipboard-check" style="color: #5578ff;"></i> <!-- Cek Status Gizi -->
                    <h3><a href="" class="stretched-link">Cek Status Gizi</a></h3>
                </div>
            </div><!-- End Feature Item -->

            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="features-item">
                    <i class="bi bi-lightbulb" style="color: #e80368;"></i> <!-- Tips -->
                    <h3><a href="" class="stretched-link">Tips</a></h3>
                </div>
            </div><!-- End Feature Item -->

            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="features-item">
                    <i class="bi bi-envelope" style="color: #e361ff;"></i> <!-- Konsultasi -->
                    <h3><a href="" class="stretched-link">Konsultasi</a></h3>
                </div>
            </div><!-- End Feature Item -->

        </div>
    </div>
</section><!-- /Features Section -->

<!-- Articel Section -->
<section id="articles" class="articles section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Artikel Gizi</h2>
        <p>Informasi Terbaru Seputar Kesehatan dan Nutrisi</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="fade-up"
                style="transition: transform 0.3s ease-in-out;">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/img/course-1.jpg') }}" class="card-img-top" alt="Judul Artikel 2"
                        style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <span class="badge bg-primary text-white mb-2">Kesehatan Mental</span>
                            <h5 class="card-title fw-semibold text-dark">
                                <a href="#" class="text-decoration-none text-dark hover-text-primary">Cara
                                    Mengelola Stres dengan Lebih Baik</a>
                            </h5>
                            <p class="card-text text-muted">Pelajari cara sederhana untuk mengurangi stres dan
                                meningkatkan kualitas hidup Anda.</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex justify-content-between align-items-center px-0 pb-0 border-top pt-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle bg-light d-flex justify-content-center align-items-center me-2"
                                    style="width: 40px; height: 40px;">
                                    <i class="bi bi-person text-secondary"></i>
                                </div>
                                <div>
                                    <small class="text-muted">Psikolog Nina</small><br>
                                    <small class="text-muted">10 Mei 2025</small>
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
            <!-- End Article Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="fade-up"
                style="transition: transform 0.3s ease-in-out;">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/img/course-2.jpg') }}" class="card-img-top" alt="Judul Artikel 2"
                        style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <span class="badge bg-primary text-white mb-2">Kesehatan Mental</span>
                            <h5 class="card-title fw-semibold text-dark">
                                <a href="#" class="text-decoration-none text-dark hover-text-primary">Cara
                                    Mengelola Stres dengan Lebih Baik</a>
                            </h5>
                            <p class="card-text text-muted">Pelajari cara sederhana untuk mengurangi stres dan
                                meningkatkan kualitas hidup Anda.</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex justify-content-between align-items-center px-0 pb-0 border-top pt-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle bg-light d-flex justify-content-center align-items-center me-2"
                                    style="width: 40px; height: 40px;">
                                    <i class="bi bi-person text-secondary"></i>
                                </div>
                                <div>
                                    <small class="text-muted">Psikolog Nina</small><br>
                                    <small class="text-muted">10 Mei 2025</small>
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
            <!-- End Article Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="fade-up"
                style="transition: transform 0.3s ease-in-out;">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/img/course-3.jpg') }}" class="card-img-top" alt="Judul Artikel 2"
                        style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <span class="badge bg-primary text-white mb-2">Kesehatan Mental</span>
                            <h5 class="card-title fw-semibold text-dark">
                                <a href="#" class="text-decoration-none text-dark hover-text-primary">Cara
                                    Mengelola Stres dengan Lebih Baik</a>
                            </h5>
                            <p class="card-text text-muted">Pelajari cara sederhana untuk mengurangi stres dan
                                meningkatkan kualitas hidup Anda.</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex justify-content-between align-items-center px-0 pb-0 border-top pt-3">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle bg-light d-flex justify-content-center align-items-center me-2"
                                    style="width: 40px; height: 40px;">
                                    <i class="bi bi-person text-secondary"></i>
                                </div>
                                <div>
                                    <small class="text-muted">Psikolog Nina</small><br>
                                    <small class="text-muted">10 Mei 2025</small>
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
            <!-- End Article Item-->

        </div>
    </div>

</section>
<!-- /Courses Section -->
@endsection
