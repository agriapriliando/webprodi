<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kelola Users</title>

    <!-- Favicons -->
    <link href="{{ asset('') }}assets/img/favicon.png" rel="icon">
    <link href="{{ asset('') }}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('') }}assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/css/bootstrap-new.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet">

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
        url("{{ asset('') }}assets/img/hero-bg.jpg") center center no-repeat;
        /* background: linear-gradient(45deg, #7200c9, #9758c7), url("../img/hero-bg.jpg") center center no-repeat; */
        background-size: cover;
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="{{ asset('') }}">Kelola Pengguna</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('admin') }}">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Pilih Prodi/UPPS</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach ($daftarweb as $prodi)
                            <li><a href="{{ url('admin/'.$prodi->slug) }}">{{ strtoupper($prodi->nama_prodi) }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ asset('') }}logout"><i style="font-size: 19px" class="bi bi-box-arrow-in-right me-2"></i> Logout</a></li>
                    <li><a class="getstarted scrollto" href="https://api.whatsapp.com/send/?phone=6281244525709">INFO PENDAFTARAN</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <style>
        #hero {
            height: 20px !important;
            padding-top: 0px;
            padding-bottom: 75px
        }

        @media (min-width: 991px) {
            #hero {
                height: 20px !important;
                padding-top: 0px;
                padding-bottom: 110px
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('') }}assets/select2/select2.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/select2/select2-bootstrap-5-theme.min.css">
    <section id="hero">
    </section>
    <!-- End Hero -->
    <!-- Start Form -->
    <div class="container p-3">
        <div class="row mb-1">
            <span class="btn btn-warning p-2">Selamat Datang Administrator - Anda Login Akun Utama Sebagai Agri Apriliando
                <a href="{{ asset('') }}logout" style="text-decoration: underline"><i class="bi bi-box-arrow-in-right"></i> Klik untuk Logout</a></span>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Tambah Akun</h5>
                        @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                            <h4><strong></strong> {{ session('status') }}</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <h6 class="card-subtitle mb-2 text-body-secondary">Form Perubahan Data</h6>
                        <form action="{{ url('admin/users/'.$user->id.'/update') }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="mb-3 ">
                                <label class="form-label">Nama Pengguna :</label>
                                <input name="nama" style="background-color: rgb(242, 242, 242);" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $user->nama) }}">
                                @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label class="form-label">Username :</label>
                                <input name="username" style="background-color: rgb(242, 242, 242);" class="form-control @error('username') is-invalid @enderror" value="{{ old('username', $user->username) }}">
                                <small>Tanpa memakai spasi | Digunakan untuk login</small>
                                @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label class="form-label">Jenis :</label>
                                <select class="form-select" name="jenis" aria-label="Default select example">
                                    <option value="admin">Admin</option>
                                </select>
                                @error('jenis')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 ">
                                <label class="form-label">Pilih Website yang dikelola :</label>
                                <select class="form-select @error('website_dikelola') is-invalid @enderror" name="website_dikelola[]" multiple="multiple" id="basic-usage" aria-label="Default select example">
                                    @foreach ($allprodi as $item)
                                    <option value="{{ $item->id }}" {{ in_array($item->id,$website_dikelola) ? "selected" : "" }}>{{ $item->jenjang.'-'.$item->nama_prodi }}</option>
                                    @endforeach
                                </select>
                                @error('website_dikelola')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password : </label>
                                <div class="input-group">
                                    <input id="myPassword" style="background-color: rgb(242, 242, 242);" class="form-control @error('password') is-invalid @enderror" type="password" name="password">
                                    <span class="input-group-text">
                                        <i id="iconPass" class="bi bi-eye-slash" onclick="unhidePass()"></i>
                                    </span>
                                </div>
                                <small class="text-muted">Masukan Password Baru untuk mengganti yang lama</small>
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success rounded-4">Simpan</button>
                            </div>
                        </form>
                        <div class="d-grid gap-2 mt-2">
                            <a href="{{ asset('admin/utama') }}" class="btn btn-warning rounded-4">Batalkan / Kembali</a>
                        </div>
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
                        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

                        <script src="{{ asset('') }}assets/select2/select2.min.js"></script>

                        <script>
                            $(document).ready(function(){
                                $( '#basic-usage' ).select2( {
                                    theme: "bootstrap-5",
                                    placeholder: $( this ).data( 'placeholder' ),
                                } );
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Form -->
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>Halaman Kelola Akun</h3>
                        <p>
                            Institut Agama Kristen Negeri Palangka Raya<br>(IAKN Palangka Raya)<br>
                            <strong> Phone:</strong> 0808080808080<br>
                            <strong> Email:</strong> contoh@email.com<br>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">

            <div class="copyright-wrap d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>UPT TIPD IAKN Palangka Raya</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits d-none">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="https://api.whatsapp.com/send/?phone=6281244525709" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/mpk.iaknpky/" class="instagram"><i class="bx bxl-instagram"></i></a>
                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{ asset('') }}assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('') }}assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('') }}assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('') }}assets/js/main.js"></script>

</body>

</html>