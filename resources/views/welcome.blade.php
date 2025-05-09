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
    <style>

    </style>
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
                    <li><a href="{{url('/tips')}}">Tips</a></li>
                    <li><a href="p{{url('/konsul')}}">Konsultasi</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{url('/login')}}">Masuk</a>

        </div>
    </header>

    <main class="main">

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

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="card shadow rounded-4 overflow-hidden border-0">
                            <img src="{{ asset('assets/img/course-1.jpg') }}" class="card-img-top"
                                alt="Nutrisi Seimbang">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="mb-3">
                                    <span class="badge bg-primary mb-2">Kebutuhan Gizi</span>
                                    <h5 class="card-title">
                                        <a href="#" class="text-decoration-none text-dark hover-text-primary">
                                            Pentingnya Nutrisi Seimbang untuk Kesehatan
                                        </a>
                                    </h5>
                                    <p class="card-text text-muted">Memahami peran nutrisi dalam menjaga kesehatan tubuh
                                        dan
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

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in"
                        data-aos-delay="200">
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
                                    <p class="card-text text-muted">Menjelajahi pilihan makanan yang kaya akan vitamin
                                        dan
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

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in"
                        data-aos-delay="200">
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
                                    <p class="card-text text-muted">Langkah mudah dan efektif untuk mengatur pola makan
                                        agar
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

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Newsletter Kami</h4>
                    <p>Berlangganan untuk mendapatkan tips gizi dan informasi kesehatan terbaru.</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form">
                            <input type="email" name="email">
                            <input type="submit" value="Berlangganan">
                        </div>
                        <div class="loading">Memproses...</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Permintaan langganan Anda telah dikirim. Terima kasih!</div>
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
