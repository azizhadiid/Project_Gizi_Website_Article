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
            @foreach ($articles as $article)

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="fade-up"
                style="transition: transform 0.3s ease-in-out;">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                    <img src="{{ asset('img/admin/article/' . $article->cover_image) }}" class="card-img-top"
                        alt="Judul Artikel 2" style="height: 220px; object-fit: cover;" alt="{{ $article->title }}">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <h5 class="card-title fw-semibold text-dark">
                                <a href="#"
                                    class="text-decoration-none text-dark hover-text-primary">{{ $article->title }}</a>
                            </h5>
                            <p class="card-text text-muted">
                                {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 90) }}</p>
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
                                    <small
                                        class="text-muted">{{ \Carbon\Carbon::parse($article->published_at)->translatedFormat('d M Y') }}</small>
                                </div>
                            </div>
                            <a href="{{ route('artikel.baca', $article->id) }}" class="btn btn-sm"
                                style="background: linear-gradient(135deg, #00C9A7, #005B41); border: none; color: white; border-radius: 10px;">
                                Baca
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>

<!-- Page Title -->
<div class="page-title" data-aos="fade" id="tentang">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Tentang GIZIKU<br></h1>
                    <p class="mb-0">Giziku berkomitmen untuk menghadirkan informasi dan solusi gizi terbaik.
                        Kami percaya bahwa pola makan sehat adalah kunci menuju kehidupan yang lebih baik.
                        Temukan berbagai tips, artikel, dan panduan yang membantu kamu meraih kesehatan optimal.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Page Title -->

<!-- About Us Section -->
<section id="about-us" class="section about-us">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('assets/img/img-about.jpg') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                <h3>Pentingnya Gizi Seimbang untuk Kehidupan Sehat</h3>
                <p class="fst-italic">
                    Pola makan sehat dan gizi seimbang berperan penting dalam menjaga kesehatan tubuh serta
                    meningkatkan kualitas hidup.
                </p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span>Mengonsumsi makanan bergizi membantu
                            meningkatkan energi dan daya tahan tubuh.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Asupan nutrisi yang tepat berperan dalam
                            menjaga kesehatan organ dan fungsi tubuh.</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Giziku memberikan informasi lengkap mengenai
                            pola makan sehat dan tips gizi yang mudah diterapkan.</span></li>
                </ul>
            </div>

        </div>

    </div>

</section><!-- /About Us Section -->

<!-- Counts Section -->
<section id="counts" class="section counts light-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Pengguna</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Artikel</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Kegiatan</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Ahli Gizi</p>
                </div>
            </div><!-- End Stats Item -->

        </div>

    </div>

</section><!-- /Counts Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Testimoni</h2>
        <p>Apa yang Mereka Katakan</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="btn btn-success rounded">
            <a href="{{url('/login')}}" class="read-more"><span style="color: white">Beri Ulasan Anda</span> <i
                    class="bi bi-arrow-right" style="color: white"></i></a>
        </div>

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                        },
                        "1200": {
                            "slidesPerView": 2,
                            "spaceBetween": 20
                        }
                    }
                }

            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                    suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen
                                    aliquam,
                                    risus at semper.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem
                                    cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                    irure amet
                                    legam anim culpa.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                    quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                    quis sint
                                    minim.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export
                                    minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit
                                    fore quem
                                    dolore labore illum veniam.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam
                                    tempor
                                    noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat
                                    legam esse
                                    veniam culpa fore nisi cillum quid.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Testimonials Section -->
<!-- /Courses Section -->
@endsection
