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

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="card shadow rounded-4 overflow-hidden border-0">
                    <img src="{{ asset('assets/img/course-1.jpg') }}" class="card-img-top" alt="Nutrisi Seimbang">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <span class="badge bg-primary mb-2">Kebutuhan Gizi</span>
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark hover-text-primary">
                                    Pentingnya Nutrisi Seimbang untuk Kesehatan
                                </a>
                            </h5>
                            <p class="card-text text-muted">Memahami peran nutrisi dalam menjaga kesehatan tubuh dan
                                meningkatkan daya tahan.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center border-top pt-3">
                            <div class="d-flex align-items-center">
                                <small class="text-muted">Dr. Arif</small>
                            </div>
                            <div class="text-muted">
                                <i class="bi bi-heart-fill text-danger"></i> 120
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Article Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card shadow rounded-4 overflow-hidden border-0">
                    <img src="{{ asset('assets/img/course-2.jpg') }}" class="card-img-top" alt="Makanan Imun">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <span class="badge bg-warning text-dark mb-2">Makanan Sehat</span>
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark hover-text-primary">
                                    Makanan yang Membantu Meningkatkan Imun Tubuh
                                </a>
                            </h5>
                            <p class="card-text text-muted">Menjelajahi pilihan makanan yang kaya akan vitamin dan
                                antioksidan untuk mendukung sistem imun.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center border-top pt-3">
                            <div class="d-flex align-items-center">
                                <small class="text-muted">Dr. Siti</small>
                            </div>
                            <div class="text-muted">
                                <i class="bi bi-heart-fill text-danger"></i> 98
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Article Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card shadow rounded-4 overflow-hidden border-0">
                    <img src="{{ asset('assets/img/course-3.jpg') }}" class="card-img-top" alt="Makanan Imun">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <span class="badge bg-success text-dark mb-2">Gaya Hidup Sehat</span>
                            <h5 class="card-title">
                                <a href="#" class="text-decoration-none text-dark hover-text-primary">
                                    Tips Sederhana untuk Pola Makan Sehat
                                </a>
                            </h5>
                            <p class="card-text text-muted">Langkah mudah dan efektif untuk mengatur pola makan agar
                                tetap sehat dan seimbang.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center border-top pt-3">
                            <div class="d-flex align-items-center">
                                <small class="text-muted">Dr. Budi</small>
                            </div>
                            <div class="text-muted">
                                <i class="bi bi-heart-fill text-danger"></i> 110
                            </div>
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
