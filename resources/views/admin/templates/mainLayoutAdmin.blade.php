<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/flag-icon-css/css/flag-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/chartist/chartist.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/vertical-light-layout/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets-admin/images/favicon.png') }}" />

    {{-- My Style --}}
    <link rel="stylesheet" href="{{ asset('assets-admin/css/admin/mystle.css') }}">

  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="{{ asset('assets-admin/images/logo-light.png') }}" alt="logo" class="logo-dark" />
            <img src="{{ asset('assets-admin/images/logo-light.png') }}" alt="logo-light" class="logo-light">
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets-admin/images/logo-mini.svg') }}" alt="logo" /></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Selamat Datang di Website GIZIKU!</h5>
          <ul class="navbar-nav navbar-nav-right">
            
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ms-2" src="{{ asset('img/admin/profile/' . $profileAdmin?->profile_picture) }}" alt="Profile image"> <span class="font-weight-normal"> {{ $profileAdmin?->first_name }} {{ $profileAdmin?->last_name }} </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-xs rounded-circle ms-2 rounded-circle" src="{{ asset('img/admin/profile/' . $profileAdmin?->profile_picture) }}" alt="Profile image">
                  <p class="mb-1 mt-3">{{ $profileAdmin?->first_name }} {{ $profileAdmin?->last_name }}</p>
                  <p class="font-weight-light text-muted mb-0">{{ $profileAdmin?->email }}</p>
                </div>
                <a class="dropdown-item" href="/akun/admin"><i class="dropdown-item-icon icon-user text-primary"></i> Akun Saya </a>
                <a class="dropdown-item" href="{{url('/admin/logout')}}"><i class="dropdown-item-icon icon-power text-primary"></i>Keluar</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item navbar-brand-mini-wrapper">
              <a class="nav-link navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets-admin/images/logo-mini.svg') }}" alt="logo" /></a>
            </li>
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{ asset('img/admin/profile/' . $profileAdmin?->profile_picture) }}" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ $profileAdmin?->first_name }} {{ $profileAdmin?->last_name }}</p>
                  <p class="designation">{{ $profileAdmin?->position }}</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dashboard">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Artikel</span></li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/artikel/tambah">
                <span class="menu-title">Tambah Artikel</span>
                <i class="icon-note menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/artikel/edit">
                <span class="menu-title">Edit Artikel</span>
                <i class="icon-docs menu-icon"></i>
              </a>
            </li>
            
            <li class="nav-item nav-category"><span class="nav-link">Konsultasi</span></li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/konsul">
                <span class="menu-title">Data Konsultasi</span>
                <i class="icon-disc menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('konten')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025 GIZIKU Semua Hak Dilindungi. <a href="#"> Terms of use</a><a href="#">Privacy Policy</a></span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Dirancang oleh Tim GIZIKU <i class="icon-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets-admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    {{-- <script src="{{ asset('assets-admin/vendors/chart.js/chart.umd.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/jquery.cookie.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=" {{ asset('assets-admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets-admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets-admin/js/misc.js') }}"></script>
    <script src="{{ asset('assets-admin/js/settings.js') }}"></script>
    <script src="{{ asset('assets-admin/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets-admin/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>