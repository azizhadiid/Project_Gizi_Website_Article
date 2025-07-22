<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Giziku-Welcome</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- My Style -->
    <link href="{{ asset('assets/css/welcome.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Giziku</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{url('/')}}" class="active">Beranda<br></a></li>
                    <li><a href="{{url('/about')}}">Tentang Kami</a></li>
                    <li><a href="{{url('/artikel')}}">Artikel Gizi</a></li>
                    <li><a href="{{url('/status')}}">Cek Status Gizi</a></li>
                    <li><a href="p{{url('/konsul')}}">Konsultasi</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{url('/login')}}">Masuk</a>

        </div>
    </header>

    <main class="main">
        <div class="row" style="width: 50%">
            @if ($errors->any())
            <div class="col-12">
                <div class="alert alert-danger alert-dismissible fade show py-2" role="alert">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-exclamation-circle-fill me-2 mt-1 flex-shrink-0" style="font-size: 0.9rem;"></i>
                        <div class="flex-grow-1">
                            @foreach ($errors->all() as $error)
                            <small class="d-block mb-1 lh-sm">{{ $error }}</small>
                            @endforeach
                        </div>
                    </div>
                    <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            </div>
            @endif

            @if (session('success'))
            <div class="col-12">
                <div class="alert alert-success alert-dismissible fade show py-2" role="alert">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill me-2 flex-shrink-0" style="font-size: 0.9rem;"></i>
                        <small class="mb-0 flex-grow-1">{{ session('success') }}</small>
                    </div>
                    <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            </div>
            @endif

            @if (session('status'))
            <div class="col-12">
                <div class="alert alert-info alert-dismissible fade show py-2" role="alert">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-info-circle-fill me-2 flex-shrink-0" style="font-size: 0.9rem;"></i>
                        <small class="mb-0 flex-grow-1">{{ session('status') }}</small>
                    </div>
                    <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            </div>
            @endif
        </div>

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
                                alt="Judul Artikel 2" style="height: 220px; object-fit: cover;"
                                alt="{{ $article->title }}">
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
                    <!-- End Article Item-->
                </div>
            </div>

        </section>
        <!-- /Courses Section -->

    </main>

    <footer id="footer" class="footer position-relative light-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">GIZIKU</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jl. Sehat No. 108</p>
                        <p>Jambi, Indonesia</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 8123 4567 890</span></p>
                        <p><strong>Email:</strong> <span>info@gizisehat.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Informasi Berguna</h4>
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Panduan Gizi</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Konsultasi</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li><a href="#">Artikel Gizi</a></li>
                        <li><a href="#">Cek Status Gizi</a></li>
                        <li><a href="#">Tips Sehat</a></li>
                        <li><a href="#">Konsultasi Ahli Gizi</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-contact-form">
                    <h4>Hubungi Kami</h4>
                    <p>Ada pertanyaan? Kirimkan pesan kepada kami dan dapatkan tips gizi terbaru!</p>

                    <form action="{{ route('kontak.kirim') }}" method="post">
                        @csrf
                        <div class="row gy-3">
                            <!-- Nama Field -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="floatingName"
                                        placeholder="Nama Lengkap" required>
                                    <label for="floatingName">
                                        <i class="bi bi-person me-1"></i>Nama Lengkap
                                    </label>
                                </div>
                            </div>

                            <!-- Email Field -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="floatingEmail"
                                        placeholder="Email" required>
                                    <label for="floatingEmail">
                                        <i class="bi bi-envelope me-1"></i>Email
                                    </label>
                                </div>
                            </div>

                            <!-- Subject Field -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <select name="subject" class="form-select" id="floatingSubject" required>
                                        <option value="">Pilih Topik</option>
                                        <option value="konsultasi"
                                            {{ old('subject') == 'konsultasi' ? 'selected' : '' }}>
                                            Konsultasi Gizi
                                        </option>
                                        <option value="tips" {{ old('subject') == 'tips' ? 'selected' : '' }}>
                                            Tips Kesehatan
                                        </option>
                                        <option value="artikel" {{ old('subject') == 'artikel' ? 'selected' : '' }}>
                                            Request Artikel
                                        </option>
                                        <option value="newsletter"
                                            {{ old('subject') == 'newsletter' ? 'selected' : '' }}>
                                            Berlangganan Newsletter
                                        </option>
                                        <option value="lainnya" {{ old('subject') == 'lainnya' ? 'selected' : '' }}>
                                            Lainnya
                                        </option>
                                    </select>
                                    <label for="floatingSubject">
                                        <i class="bi bi-chat-dots me-1"></i>Topik Pesan
                                    </label>
                                </div>
                            </div>

                            <!-- Message Field -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control" placeholder="Tulis pesan Anda disini"
                                        id="floatingMessage" style="height: 120px" required></textarea>
                                    <label for="floatingMessage">
                                        <i class="bi bi-pencil-square me-1"></i>Pesan Anda
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-2">
                                    <i class="bi bi-send me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">GIZIKU</strong> <span>Semua Hak
                    Dilindungi</span></p>
            <div class="credits">
                Dirancang oleh <a href="#">Tim GIZIKU</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
