<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forgot Password</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/flag-icon-css/css/flag-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/vertical-light-layout/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets-admin/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="{{ asset('assets-admin/images/logo-dark.png') }}">
                            </div>
                            <h4 style="margin-top: -20px">Lupa Kata Sandi?</h4>
                            <h6 class="font-weight-light">Masukkan emailmu untuk mereset kata sandi</h6>

                            @if ($errors->any())
                            <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert"
                                style="width: 100%">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-exclamation-circle-fill me-2"></i>
                                    <div>
                                        @foreach ($errors->all() as $error)
                                        <p class="m-0">{{ $error }}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif

                            {{-- Jika Sukses Login --}}
                            @if (session('success'))
                            <div class="alert alert-success" style="width: 100%">
                                {{ session('success') }}
                            </div>
                            @endif

                            {{-- jika Password telah di ubah --}}
                            @if (session('status'))
                            <div class="alert alert-success" style="width: 100%">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form action="/forgot-password" method="POST" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="Masukkan Email" name="email">
                                </div>
                                <div class="mt-3 d-flex justify-content-center">
                                    <button class="btn d-grid btn-primary btn-lg font-weight-medium auth-form-btn"
                                        style="width: 100%" type="submit">Kirim Tautan Reset</button>
                                </div>
                                <div class="my-2 d-flex justify-content-start align-items-center">
                                    <a href="/login" class="auth-link text-black mt-3">Kembali ke Halaman Masuk</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Belum punya akun? <a href="/register" class="text-primary">Daftar Sekarang</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets-admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets-admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets-admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets-admin/js/misc.js') }}"></script>
    <script src="{{ asset('assets-admin/js/settings.js') }}"></script>
    <script src="{{ asset('assets-admin/js/todolist.js') }}"></script>
    <!-- endinject -->
</body>

</html>
