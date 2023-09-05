<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content="width=device-width,height=device-height, initial-scale=1, shrink-to-fit=yes">

    <!--theme colors -->
    <meta name="theme-color" content="" />
    <meta name="apple-mobile-web-app-status-bar-style" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!--Basic meta info -->
    <meta name="keywords" content="{{ $seo_title->teks }}">
    <meta name="author" content="IAKN Palangka Raya" />
    <meta name="description" content="{{ $seo_deskripsi->teks }}">

    <!--OpenGraph meta -->
    <meta property="og:description" content="{{ $seo_deskripsi->teks }}" />
    <meta property="og:title" content="{{ $seo_title->teks }}" />
    <meta property="og:image" content="{{ asset('assets/'.$seo_image->link) }}" />
    <meta property="og:url" content="{{ url('/'.$slug_prodi) }}" />

    <!--meta for twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@humas_iaknpky">
    <meta name="twitter:title" content="{{ $seo_title->teks }}">
    <meta name="twitter:image" content="{{ asset('assets/'.$seo_image->link) }}">
    <meta name="twitter:site" content="@humas_iaknpky">
    <meta name="twitter:description" content="{{ $seo_deskripsi->teks }}">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/'.$seo_image->link) }}" />

    <meta name="csrf-token" content="9Yl84flE1ZuGjvnMjkqxeIpiAGfl0damtGqR9Bvt">

    <title>{{ $header->teks }}</title>

    <!-- Favicons -->
    {{--
    <link href="http://127.0.0.1:8000/assets/img/favicon.png" rel="icon"> --}}
    {{--
    <link href="http://127.0.0.1:8000/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

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
            <h1 class="logo"><a href="{{ url('') }}">{{ $header->teks }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#pal4">{{ $pal4->teks }}</a></li>
                            <li><a href="#pal4">Visi</a></li>
                            <li><a href="#pal4">Misi</a></li>
                            <li><a href="#counts">Statistik</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#link">Link Tertaut</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="getstarted scrollto" href="https://api.whatsapp.com/send/?phone=6281244525709">INFO PENDAFTARAN</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>{!! $pal1->teks !!}</h1>
                    <h2>{!! $pal2->teks !!}</h2>
                    <div><a href="{{ $pal3->link }}" class="btn-get-started scrollto">{{ $pal3->teks }}</a></div>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ asset('assets/'.$foto1->link) }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                        <img src="{{ asset('assets/'.$foto2->link) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3 id="pal4">{{ $pal4->teks }}</h3>
                        <p class="fst-italic">{{ $pal5->teks }}</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> {{ $pal6->teks }}</li>
                            <li><i class="bi bi-check-circle"></i> {{ $pal7->teks }}</li>
                            <li><i class="bi bi-check-circle"></i> {{ $pal8->teks }}</li>
                        </ul>
                        <div class="mb-3">
                            <h4>VISI</h4>
                            <p>{{ $visi->teks }}</p>
                        </div>
                        <div class="mb-5">
                            <h4>MISI</h4>
                            <p>{{ $misi->teks }}</p>
                        </div>
                        <a href="{{ $pal3->link }}" class="read-more">{{ $pal3->teks }} <i class="bi bi-long-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-6 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $count1->link }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p> {{ $count1->teks }}</p>
                    </div>
                    <div class="col-lg-6 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $count2->link }}" data-purecounter-duration="1" class="purecounter"></span>
                        <p>{{ $count2->teks }}</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="link" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Link - Link</h2>
                    <p>Link Dokumen, Data, Layanan, Website, dan sebagainya</p>
                </div>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
                <div id="datalink" class="row justify-content-center">
                    <style>
                        .font-link {
                            font-size: 20px !important;
                        }
                    </style>
                    <div class="col-12 px-2 py-1 text-center">
                        @foreach ($dokumen as $dok)
                        <a href="{{ $dok->link }}" target="_blank" class="btn btn-primary m-2 font-link"><span class="btn btn-warning btn-sm me-1">{{ $loop->iteration }}</span> {{ $dok->teks }}</a>
                        @endforeach
                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Artikel Section ======= -->
        {{-- <section class="counts"> --}}
            <section style="background-image: url('https://iaknpky.ac.id/asset/img/background/berita_motif.png')">
                <div class="container">
                    <style>
                        img.framed {
                            box-shadow:
                                -50px -50px 0 -40px rgb(56, 2, 253),
                                50px 50px 0 -40px rgb(56, 2, 253);
                        }
                    </style>
                    <div class="section-title">
                        <h2>Berita IAKN Palangka Raya</h2>
                        <p>Bersumber dari : iaknpky.ac.id</p>
                    </div>
                    <div class="row">
                        <div class="row">
                            @foreach ($artikel as $ar)
                            <div class="col-lg-4 col-md-4 col-12 p-3">
                                <a href="https://iaknpky.ac.id/{{$ar->slug}}">
                                    <img style="max-width: 250; max-height: 250px; object-fit: cover; border-radius: 8px;" class="card-img-top" src="{{ url('https://iaknpky.ac.id/asset/img/berita/thumbnails/'.$ar->img)}}" alt="...">
                                    <div class="mt-3">
                                        <h5>{{ strlen($ar->judul) < 90 ? $ar->judul : substr($ar->judul,0,100).'....'}} </h5>
                                        <p class="fst-italic p-0 m-0">
                                            <span class="mx-1" style="font-size: 2.5vh"><i class="fas fa-user-tie me-1"></i>By {{$ar->user->name}}</span>
                                            <span class="mx-1" style="font-size: 2.5vh"><i class="far fa-calendar-alt me-1"></i>{{date('d F, Y', strtotime($ar->created_at))}}</span>
                                            <span class="mx-1" style="font-size: 2.5vh"><i class="far fa-clock me-1"></i>{{date('H:i:s', strtotime($ar->created_at))}} WIB</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <a href="https://iaknpky.ac.id/artikel" target="_blank" class="btn btn-primary mt-5">Lihat Berita Selengkapnya</a>
                    </div>

                </div>
            </section>
            <!-- End Artikel Section -->

            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq {{ $instagramembed->link == '' ? 'd-none' : '' }}">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Media Sosial</h2>
                        <p>Instagram</p>
                    </div>

                    <div class="row justify-content-md-center mb-1" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-12 col-md-5 bg-white p-2 rounded-3">
                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/{{ $instagramembed->link }}" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:undefinedpx;height:undefinedpx;max-height:100%; width:undefinedpx;">
                                <div style="padding:16px;"> <a id="main_link" href="" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
                                        <div style=" display: flex; flex-direction: row; align-items: center;">
                                            <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                            </div>
                                        </div>
                                        <div style="padding: 19% 0;"></div>
                                        <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                        <g>
                                                            <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></div>
                                        <div style="padding-top: 8px;">
                                            <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div>
                                        </div>
                                        <div style="padding: 12.5% 0;"></div>
                                        <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                            <div>
                                                <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                                <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                                <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                            </div>
                                            <div style="margin-left: 8px;">
                                                <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                                <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                            </div>
                                            <div style="margin-left: auto;">
                                                <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                                <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                                <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                            </div>
                                        </div>
                                        <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                            <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                            <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                        </div>
                                    </a>
                                    <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Shared post</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;">Time</time></p>
                                </div>
                            </blockquote>
                            <script src="https://www.instagram.com/embed.js"></script>
                            <script type="text/javascript" src="https://www.embedista.com/j/instagramfeed.js"></script>
                            <div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;"><a href="https://www.embedista.com/instagramfeed">Embed Instagram Post</a> Code Generator</div>
                        </div>
                        <style>
                            .boxes3 {
                                height: 175px;
                                width: 153px;
                            }

                            #n img {
                                max-height: none !important;
                                max-width: none !important;
                                background: none !important
                            }

                            #inst i {
                                max-height: none !important;
                                max-width: none !important;
                                background: none !important
                            }
                        </style>
                    </div>

                </div>
            </section><!-- End Frequently Asked Questions Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>Kunjungi Kami disini untuk kenal lebih dekat</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="info-box mb-4">
                                <i class="bx bx-map"></i>
                                <h3>Alamat Kami</h3>
                                <p>{!! $alamat->teks !!}</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email</h3>
                                <p>{{ $email->teks }}</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>No HP</h3>
                                <p>{{ $nohp->teks }}</p>
                            </div>
                        </div>

                    </div>

                    <div class="row justify-content-center">

                        <div class="col-5">
                            {!! $gmap->teks !!}
                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>{!! $footer1->teks !!}</h3>
                        <p>
                            {!! $footer2->teks !!}
                            <br>
                            <strong> Phone:</strong> {{ $nohp->teks }}<br>
                            <strong> Email:</strong> {{ $email->teks }}<br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            @foreach ($footerlink as $fl)
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ $fl->link }}">{{ $fl->teks }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>{{ $footer3->teks }}</h4>
                        <p>{{ $footer4->teks }}</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">

            <div class="copyright-wrap d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span><a class="text-white" href="https://tipd.iaknpky.ac.id/">UPT TIPD IAKN Palangka Raya</a></span></strong>. All Rights Reserved
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="{{ $whatsapp->link }}" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
                    <a href="{{ $facebook->link }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="{{ $instagram->link }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer -->

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