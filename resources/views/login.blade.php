<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Login Admin</title>

  <!-- Favicons -->
  <link href="{{ asset('assets') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/css/bootstrap-new.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  .btn-primary {
    border: #ededed 1px solid;
  }

  .link-admin {
    text-decoration: underline;
  }

  #hero {
    width: 100%;
    height: 100vh;
    background: linear-gradient(45deg, rgba(86, 58, 250, 0.9) 0%, rgba(116, 15, 214, 0.9) 100%),
    url("{{ asset('assets/img/hero-bg.jpg') }}") center center no-repeat;
    /* background: linear-gradient(45deg, #7200c9, #9758c7), url("../img/hero-bg.jpg") center center no-repeat; */
    background-size: cover;
  }
</style>

<body>

  <div id="login">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="{{ url('/') }}">LOGIN ADMIN</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
          <ul>
            <li class="dropdown"><a href="#"><span>Daftar Web</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{ url('') }}"></a></li>
              </ul>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header>
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

      <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            @if (session('status'))
            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
              <h4><strong>Gagal</strong> {{ session('status') }}</h4>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session('logout'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
              <h4><strong>Berhasil</strong> {{ session('logout') }}</h4>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <h2>Halaman Login Website Program Studi</h2>
            <form action="{{ url('login') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label text-white">Username : </label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror">
                @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label class="form-label text-white">Password : </label>
                <div class="input-group">
                  <input id="myPassword" class="form-control @error('password') is-invalid @enderror" type="password" name="password">
                  <span class="input-group-text">
                    <i id="iconPass" class="bi bi-eye-slash" onclick="unhidePass()"></i>
                  </span>
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-check mb-3">
                <label class="form-check-label text-white">
                  <input name="remember_me" class="form-check-input" type="checkbox" style="color: black">
                  Ingat Saya
                </label>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary shadow-lg">Login</button>
              </div>
            </form>
            <script>
              function unhidePass() {
                var x = document.getElementById("myPassword");
                var icon = document.getElementById("iconPass");
                if (x.type === "password") {
                    x.type = "text";
                    icon.classList.remove("bi-eye-slash");
                    icon.classList.add("bi-eye");
                } else {
                    icon.classList.remove("bi-eye");
                    icon.classList.add("bi-eye-slash");
                    x.type = "password";
                }
            }
            </script>
          </div>
        </div>

        <div class="row justify-content-center mt-5">
          <div class="col-12 col-lg-8 text-center">
            @foreach ($daftarweb as $item)
            <a href="{{ url('/'.$item->slug) }}" class="btn btn-sm btn-warning">{{ $item->nama_prodi }}</a>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->
  </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  {{-- <div id="preloader"></div> --}}

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets') }}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('assets') }}/vendor/aos/aos.js"></script>
  <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('assets') }}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets') }}/js/main.js"></script>

</body>

</html>