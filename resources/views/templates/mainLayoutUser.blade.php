<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
                    <li><a href="{{ url('/beranda') }}"
                            class="{{ request()->is('beranda') ? 'active' : '' }}">Beranda</a></li>
                    <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">Tentang
                            Kami</a></li>
                    <li><a href="{{ url('/artikel') }}" class="{{ request()->is('artikel*') ? 'active' : '' }}">Artikel
                            Gizi</a></li>
                    <li><a href="{{ url('/status') }}" class="{{ request()->is('status') ? 'active' : '' }}">Cek Status
                            Gizi</a></li>
                    <li><a href="{{ url('/konsul') }}"
                            class="{{ request()->is('konsul') ? 'active' : '' }}">Konsultasi</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{url('/akun')}}">Akun</a>

        </div>
    </header>

    <main class="main">
        @yield('konten')
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

    {{-- CD MySwitchAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- MyScript --}}
    <script src="{{ asset('assets/js/main-layout-user.js') }}"></script>
</body>

</html>
