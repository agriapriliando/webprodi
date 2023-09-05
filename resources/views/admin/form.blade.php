<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $header->teks}}</title>

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
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <div style="max-width: 300px">
                <h1 class="logo" style="font-size: 14px"><a href="{{ url('') }}">{{ $header->teks }}</a></h1>
            </div>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('admin/'.$slug) }}">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Teks</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('part/'.$slug.'/'.$header->kode) }}">{{ strtoupper($header->kode) }}</a></li>
                            <li class="dropdown"><a href="#"><span>Part A</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    @foreach ($pal as $item)
                                    <li><a href="{{ url('part/'.$slug.'/'.$item->kode) }}">{{ strtoupper($item->kode) }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ url('part/'.$slug.'/'.$visi->kode) }}">{{ strtoupper($visi->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$misi->kode) }}">{{ strtoupper($misi->kode) }}</a></li>
                            <li class="dropdown"><a href="#"><span>Footer</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    @foreach ($footer as $item)
                                    <li><a href="{{ url('part/'.$slug.'/'.$item->kode) }}">{{ strtoupper($item->kode) }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Foto</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    @foreach ($foto as $item)
                                    <li><a href="{{ url('part/'.$slug.'/'.$item->kode) }}">{{ strtoupper($item->kode) }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Count</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    @foreach ($count as $item)
                                    <li><a href="{{ url('part/'.$slug.'/'.$item->kode) }}">{{ strtoupper($item->kode) }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>SEO</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    @foreach ($seo as $item)
                                    <li><a href="{{ url('part/'.$slug.'/'.$item->kode) }}">{{ strtoupper($item->kode) }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('part/'.$slug.'/'.$facebook->kode) }}">{{ strtoupper($facebook->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$whatsapp->kode) }}">{{ strtoupper($whatsapp->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$instagram->kode) }}">{{ strtoupper($instagram->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$instagramembed->kode) }}">{{ strtoupper($instagramembed->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$alamat->kode) }}">{{ strtoupper($alamat->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$nohp->kode) }}">{{ strtoupper($nohp->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$email->kode) }}">{{ strtoupper($email->kode) }}</a></li>
                            <li><a href="{{ url('part/'.$slug.'/'.$gmap->kode) }}">{{ strtoupper($gmap->kode) }}</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ url('admin/'.$slug.'#link') }}">LINK</a></li>
                    <li class="dropdown"><a href="#"><span>Pilih Prodi/UPPS</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach ($user as $prodi)
                            <li><a href="{{ url('admin/'.$prodi->slug) }}">{{ $prodi->jenjang.'-'.strtoupper($prodi->nama_prodi) }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ url('logout') }}"><i style="font-size: 19px" class="bi bi-box-arrow-in-right me-2"></i> Logout</a></li>
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
    <section id="hero">
    </section>
    <!-- End Hero -->
    <!-- Start Form -->
    <div class="container p-3">
        <div class="row mb-1">
            <span class="btn btn-warning p-2">Selamat Datang Administrator - Anda Login Sebagai {{ session('namauser') }} 
                <a href="{{ url('logout') }}" style="text-decoration: underline"><i class="bi bi-box-arrow-in-right"></i> Klik untuk Logout</a></span>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Ubah Data {{ strtoupper($part->kode) }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Form Perubahan Data</h6>
                        @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                            <h5><strong>Berhasil</strong> {{ session('status') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if (in_array($part->kode,['foto1','foto2','seo_image']))
                        <form action="{{ url('uploadimg/'.$slug.'/'.$part->kode) }}" method="post" enctype="multipart/form-data">
                        @else
                        <form action="{{ url('part/'.$slug.'/'.$part->kode) }}" method="post">
                        @endif
                            @method('PATCH')
                            @csrf
                            <div class="mb-3 {{ in_array($part->kode,$formNoteks) ? 'd-none' : null }}">
                                <label class="form-label">Isian :</label>
                                <textarea name="teks" style="background-color: rgb(242, 242, 242);" class="form-control" rows="3" required>{{ old('teks', $part->teks) }}</textarea>
                                @if (in_array($part->kode,['pal1','footer2']))
                                <small>Bantuan : Isian Bebas, untuk kustomisasi lanjut juga dapat diisi dengan Kode CSS Bootstrap 5.3 atau HTML Tag</small>
                                <div>
                                    <small>Contoh :</small>
                                    <ol>
                                        <li>&ltbr&gt : Untuk Line Baru</li>
                                        <li>&lta&gt : Untuk Menambahkan Link Button</li>
                                    </ol>
                                </div>
                                <div>
                                    <a class="badge rounded-pill text-bg-success" target="_blank" href="https://www.w3schools.com/html/">Lihat Panduan HTML</a>
                                    <a class="badge rounded-pill text-bg-success" target="_blank" href="https://getbootstrap.com/docs/5.3/customize/overview/">Lihat Panduan Bootstrap 5.3</a>
                                </div>
                                @endif
                            </div>
                            @if (in_array($part->kode,['count1','count2']))
                            <div class="mb-3">
                                <label class="form-label">Jumlah :</label>
                                <input style="background-color: rgb(242, 242, 242);" name="link" type="text" class="form-control mb-2" value="{{ old('link', $part->link) }}">
                            </div>
                            @endif
                            @if (in_array($part->kode,$formlink))
                            <div class="mb-3">
                                <label class="form-label">Link / URL :</label>
                                <input style="background-color: rgb(242, 242, 242);" name="link" type="text" class="form-control mb-2" value="{{ old('link', $part->link) }}">
                                <small>Silahkan Masukan Link Bebas : Contoh ->>> <span style="font-weight: bold ">https://drive.google.com/drive/folders/1ccUAiN1bpXwhYYDtUHS-2jNP0a0bX1EW?usp=drive_link</span></small>
                                @if (in_array($part->kode,['whatsapp']))
                                <small>Contoh Format utk Link/URL Whatsapp : <span style="font-weight: bold ">https://api.whatsapp.com/send/?phone=6281244525709</span></small>
                                <br><small>Ganti No HP sesuai Whatsapp yang dituju</small>
                                @endif
                            </div>
                            @endif
                            @if (in_array($part->kode,['foto1','foto2','seo_image']))
                            <div class="mb-3">
                                <label class="form-label">Upload Foto</label>
                                <input style="background-color: rgb(242, 242, 242);" name="link" type="file" class="form-control mb-2" value="{{ old('link', $part->link) }}">
                                <small>Silahkan Upload Foto untuk mengganti Foto sebelumnya</small>
                                <br>
                                <a class="btn btn-sm btn-warning m-1" href="{{ asset('assets/img/foto_awal.png') }}" download>Unduh Foto1 Default</a>
                                <a class="btn btn-sm btn-warning m-1" href="{{ asset('assets/img/seo_awal.jpg') }}" download>Unduh Foto SEO Default</a>
                            </div>
                            <div class="row justify-content-center mb-3">
                                <div class="col-6 col-lg-3">
                                    <img src="{{ url('assets/'.$part->link) }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            @endif
                            @if (in_array($part->kode,['instagramembed']))
                            <div class="mb-3">
                                <label class="form-label">Akun Instagram :</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input style="background-color: rgb(242, 242, 242);" name="link" type="text" class="form-control" value="{{ old('link', $part->link) }}">
                                </div>
                                <small>Contoh Format utk Link/URL Whatsapp : <span style="font-weight: bold ">https://api.whatsapp.com/send/?phone=6281244525709</span></small>
                                <br><small>Ganti No HP sesuai Whatsapp yang dituju</small>
                            </div>
                            @endif
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success rounded-4">Simpan</button>
                            </div>
                        </form>
                        <div class="d-grid gap-2 mt-2">
                            <a href="{{ url('admin/'.$prodislug) }}" class="btn btn-warning rounded-4">Batalkan / Kembali</a>
                        </div>
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
                        <a href="{{ url('part/'.$slug.'/'.$footer1->kode) }}" class="text-white"> ({{ strtoupper($footer1->kode) }})</a>
                        <h3>{{ $footer1->teks }}</h3>
                        <a href="{{ url('part/'.$slug.'/'.$footer2->kode) }}" class="text-white"> ({{ strtoupper($footer2->kode) }})</a>
                        <p>
                            {!! $footer2->teks !!}<br>
                            <strong><a href="{{ url('part/'.$slug.'/'.$nohp->kode) }}" class="text-white"> ({{ strtoupper($nohp->kode) }})</a> Phone:</strong> {{ $nohp->teks }}<br>
                            <strong><a href="{{ url('part/'.$slug.'/'.$email->kode) }}" class="text-white"> ({{ strtoupper($email->kode) }})</a> Email:</strong> {{ $email->teks }}<br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            @foreach ($footerlink as $item)
                            <li><a href="{{ url('part/'.$slug.'/'.$item->kode) }}" class="text-white"> ({{ strtoupper($item->kode) }})</a>
                                <i class="bx bx-chevron-right"></i> <a href="{{ $item->link }}">{{ $item->teks }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4><a href="{{ url('part/'.$slug.'/'.$footer3->kode) }}" class="text-white"> ({{ strtoupper($footer3->kode) }})</a>
                            {{ $footer3->teks }}</h4>
                        <p><a href="{{ url('part/'.$slug.'/'.$footer4->kode) }}" class="text-white"> ({{ strtoupper($footer4->kode) }})</a>
                            {{ $footer4->teks }}
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
                    <a href="{{ $whatsapp->link }}" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
                    <a href="{{ $facebook->link }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="{{ $instagram->link }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer -->

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