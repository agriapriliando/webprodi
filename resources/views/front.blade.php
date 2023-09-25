<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="IqfFhdygESWQlVflf5TBtZE5lKO09zK6i1sXvgUU">

    <title>Portal Program Studi</title>

    <!-- Favicons -->
    <link href="http://127.0.0.1:8000/assets/img/favicon.png" rel="icon">
    <link href="http://127.0.0.1:8000/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="http://127.0.0.1:8000/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/css/bootstrap-new.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="http://127.0.0.1:8000/assets/css/style.css" rel="stylesheet">

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
            url("http://127.0.0.1:8000/assets/img/hero-bg.jpg") center center no-repeat;
        /* background: linear-gradient(45deg, #7200c9, #9758c7), url("../img/hero-bg.jpg") center center no-repeat; */
        background-size: cover;
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="http://127.0.0.1:8000">Website Prodi</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown"><a href="#"><span>Quick Link</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="https://iaknpky.ac.id/">Website Institusi</a></li>
                            <li><a href="https://iaknpky.ac.id/info/seleksi-nasional-ptkkn">Seleksi Nasional</a></li>
                            <li><a href="https://iaknpky.ac.id/info/seleksi-mandiri">Seleksi Mandiri</a></li>
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
                <div class="col-12 col-lg-8 text-center">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item {{ count($fkipk) == 0 ? 'd-none' : '' }}">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Fakultas Keguruan dan Ilmu Pendidikan Kristen
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @foreach ($fkipk as $g)
                                    <a class="btn btn-warning m-1" href="{{ url('/'.$g->slug) }}">{{ $g->nama_prodi }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item {{ count($fisik) == 0 ? 'd-none' : '' }}">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Fakultas Ilmu Sosial Keagamaan Kristen
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @foreach ($fisik as $h)
                                    <a class="btn btn-warning m-1" href="{{ url('/'.$h->slug) }}">{{ $h->nama_prodi }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item {{ count($fskk) == 0 ? 'd-none' : '' }}">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Fakultas Seni Keagamaan Kristen
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @foreach ($fskk as $j)
                                    <a class="btn btn-warning m-1" href="{{ url('/'.$j->slug) }}">{{ $j->nama_prodi }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item {{ count($pasca) == 0 ? 'd-none' : '' }}">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Pascasarjana
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @foreach ($pasca as $k)
                                    <a class="btn btn-warning m-1" href="{{ url('/'.$k->slug) }}">{{ $k->nama_prodi }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="http://127.0.0.1:8000/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/aos/aos.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="http://127.0.0.1:8000/assets/js/main.js"></script>

</body>

</html>