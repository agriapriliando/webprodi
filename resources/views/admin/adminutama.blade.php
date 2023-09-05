<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="HUsVCAvJ8r7S3oXxRvYf22XHdONaqlkn7ZQH714R">

    <title>Admin Utama</title>

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

    <!-- CSS pengguna datatable -->
    {{-- <link rel="stylesheet" href="{{ asset('') }}assets/datatable/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('') }}assets/datatable/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/datatable/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/datatable/css/buttons.dataTables.min.css">

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
            url("{{ asset('assets') }}/img/hero-bg.jpg") center center no-repeat;
        /* background: linear-gradient(45deg, #7200c9, #9758c7), url("../img/hero-bg.jpg") center center no-repeat; */
        background-size: cover;
    }
</style>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <div style="max-width: 300px">
                <h1 class="logo" style="font-size: 14px"><a href="http://127.0.0.1:8000">Admin Utama</a></h1>
            </div>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="http://127.0.0.1:8000/admin/manajemen-pendidikan-kristen">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Pilih Prodi/UPPS</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach ($daftarweb as $prodi)
                            <li><a href="{{ url('admin/'.$prodi->slug) }}">{{ $prodi->jenjang.'-'.strtoupper($prodi->nama_prodi) }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="http://127.0.0.1:8000/logout"><i style="font-size: 19px" class="bi bi-box-arrow-in-right me-2"></i> Logout</a></li>
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
    <!-- Start Form -->
    <link rel="stylesheet" href="{{ asset('') }}assets/select2/select2.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/select2/select2-bootstrap-5-theme.min.css">
    <div class="container p-3">
        <div class="row">
            <span class="btn btn-warning p-2">Selamat Datang Administrator - Anda Login Sebagai {{ session('namauser') }}
                <a href="{{ url('logout') }}" style="text-decoration: underline"><i class="bi bi-box-arrow-in-right"></i> Klik untuk Logout</a>
                @if (session('iduser') == 1)
                <a href="{{ url('admin/utama') }}"><i class="bi bi-file-earmark-lock ms-2"></i></a>
                @endif
            </span>
        </div>
        <div class="row">
            @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <h4><strong></strong> {{ session('status') }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div class="row my-2">
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Tambah Akun
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card-body">
                                    <h5 class="card-title">Form Tambah Akun</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">Form Perubahan Data</h6>
                                    <form action="{{ url('admin/users/store') }}" method="post">
                                        @csrf
                                        @method('POST')
                                        <div class="mb-3 ">
                                            <label class="form-label">Nama Pengguna :</label>
                                            <input name="nama" style="background-color: rgb(242, 242, 242);" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                            @error('nama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 ">
                                            <label class="form-label">Username :</label>
                                            <input name="username" style="background-color: rgb(242, 242, 242);" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
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
                                                <option value="{{ $item->id }}" {{ collect(old('website_dikelola'))->contains($item->id) ? "selected" : "" }}>{{ $item->jenjang.'-'.$item->nama_prodi }}</option>
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
                                            @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-success rounded-4">Simpan</button>
                                        </div>
                                    </form>
                                    <div class="d-grid gap-2 mt-2">
                                        <a href="{{ asset('login') }}" class="btn btn-warning rounded-4">Batalkan / Kembali</a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Daftar Akun
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Daftar Akun</h5>
    
    
    
                                        <table id="myTableUser" class="table table-striped nowrap responsive" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama | Username</th>
                                                    <th>Jenis</th>
                                                    <th>Hak Kelola</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $item)
                                                <tr id="{{ $item->id }}">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama." | ".$item->username }}</td>
                                                    <td>{{ $item->jenis }}</td>
                                                    <td>
                                                        @foreach ($item->prodis as $d)
                                                        {{ $d->jenjang.' | '.$d->nama_prodi }}<br>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ url('admin/users/'.$item->id) }}" class="btn btn-warning btn-sm me-1"><i class="bi bi-pencil"></i></a>
                                                            @if ($item->id <> 1)
                                                                <button data-url="{{ url('admin/users/'.$item->id.'/destroy') }}" class="btn btn-danger btn-sm removeakun" data-nama="{{ $item->nama }}" data-id="{{ $item->id }}" type="button"><i class="bi bi-trash"></i></button>
                                                                @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama | Username</th>
                                                    <th>Jenis</th>
                                                    <th>Hak Kelola</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                $('.removeakun').on('click', function(e) {
                                                    e.preventDefault();
                                                    dataid = $(this).attr("data-id");
                                                    datanama = $(this).attr("data-nama");
                                                    dataurl = $(this).attr("data-url");
                                                    console.log(dataurl);
                                                    var myhtml = document.createElement("div");
                                                    myhtml.innerHTML = "Yakin ingin menghapus akun <b>"+datanama+"</b> ?";
                                                    swal.fire({
                                                        title: 'Hapus Data...',
                                                        icon: 'warning',
                                                        html: "Yakin ingin menghapus akun <b>"+datanama+"</b> ?",
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Ya, Hapus..'
                                                        }).then((deleteAll) => {
                                                            if (deleteAll.isConfirmed) {
                                                                $.ajax({
                                                                    url: ""+dataurl+"",
                                                                    type: 'DELETE',
                                                                    headers: {
                                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                    },
                                                                    success: function(data) {
                                                                        console.log(data['message']);
                                                                        swal.fire({
                                                                            title: 'Proses Hapus Akun Berhasil',
                                                                            text: ''+data['message']+'',
                                                                            icon: 'success',
                                                                            showConfirmButton: false,
                                                                            timer: 1500,
                                                                            timerProgressBar: true,
                                                                        });
                                                                        if (data['status'] == true) {
                                                                            $("#"+dataid).remove();
                                                                        } else {
                                                                            alert('Error occured.');
                                                                        }
                                                                    },
                                                                    error: function(data) {
                                                                        alert(data.responseText);
                                                                    }
                                                                });
                                                            } else {
                                                                swal.close();
                                                            }
                                                        });
                                                });
                        
                                            }); 
                                        </script>
    
                                        {{-- <script src="{{ asset('') }}assets/datatable/jquery-3.7.0.js"></script> --}}
                                        <script src="{{ asset('') }}assets/datatable/jquery.dataTables.min.js"></script>
                                        <script src="{{ asset('') }}assets/datatable/dataTables.bootstrap5.min.js"></script>
                                        <script src="{{ asset('') }}assets/datatable/dataTables.responsive.min.js"></script>
                                        <script src="{{ asset('') }}assets/datatable/responsive.bootstrap5.min.js"></script>
                                        <script src="{{ asset('') }}assets/datatable/dataTables.buttons.min.js"></script>
                                        <script src="{{ asset('') }}assets/datatable/jszip.min.js"></script>
                                        <script src="{{ asset('') }}assets/datatable/pdfmake.min.js"></script>
                                        <script src="{{ asset('') }}assets/datatable/vfs_fonts.js"></script>
                                        <script src="{{ asset('') }}assets/datatable/buttons.html5.min.js"></script>
                                        <script src="{{ asset('') }}assets/datatable/buttons.print.min.js"></script>
                                        <script src="{{ asset('') }}assets/datatable/buttons.colVis.min.js"></script>
    
                                        <script src="{{ asset('') }}assets/select2/select2.min.js"></script>
    
                                        <script>
                                            new DataTable('#myTableUser', {
                                                responsive: true,
                                                dom: 'Bfrtip',
                                                buttons: [
                                                    'pageLength','colvis',
                                                    {
                                                        extend: 'copy',
                                                        exportOptions: {
                                                            columns: [ 0, 1, 2, 3 ]
                                                        }
                                                    },
                                                    {
                                                        extend: 'excel',
                                                        exportOptions: {
                                                            columns: [ 0, 1, 2, 3 ]
                                                        }
                                                    },
                                                    {
                                                        extend: 'pdf',
                                                        exportOptions: {
                                                            columns: [ 0, 1, 2, 3 ]
                                                        }
                                                    },
                                                    {
                                                        extend: 'print',
                                                        exportOptions: {
                                                            columns: [ 0, 1, 2, 3 ]
                                                        }
                                                    }
                                                ]
                                            });
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
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tambah Website
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card-body">
                                    <h5 class="card-title">Form Tambah Website/Prodi</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">Form Tambah Website/Prodi</h6>
                                    <form action="{{ url('admin/prodi/store') }}" method="post">
                                        @csrf
                                        @method('POST')
                                        <div class="mb-3 ">
                                            <label class="form-label">Nama Website / Program Studi :</label>
                                            <input name="nama_prodi" style="background-color: rgb(242, 242, 242);" class="form-control @error('nama_prodi') is-invalid @enderror" value="{{ old('nama_prodi') }}">
                                            @error('nama_prodi')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 ">
                                            <label class="form-label">Jenjang :</label>
                                            <select class="form-select" name="jenjang" aria-label="Default select example">
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                            @error('jenjang')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 ">
                                            <label class="form-label">Nama UPPS :</label>
                                            <select class="form-control @error('upps') is-invalid @enderror" name="upps" style="background-color: rgb(242, 242, 242);">
                                                <option>====pilih upps====</option>
                                                <option value="Fakultas Keguruan dan Ilmu Pendidikan Kristen">Fakultas Keguruan dan Ilmu Pendidikan Kristen</option>
                                                <option value="Fakultas Ilmu Sosial Keagamaan Kristen">Fakultas Ilmu Sosial Keagamaan Kristen</option>
                                                <option value="Fakultas Seni Keagamaan Kristen">Fakultas Seni Keagamaan Kristen</option>
                                                <option value="Pascasarjana">Pascasarjana</option>
                                                <option value="IAKN PKY">IAKN Palangka Raya</option>
                                            </select>
                                            @error('upps')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-success rounded-4">Simpan</button>
                                        </div>
                                    </form>
                                    <div class="d-grid gap-2 mt-2">
                                        <a href="{{ asset('login') }}" class="btn btn-warning rounded-4">Batalkan / Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Daftar Website
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Daftar Website</h5>
    
                                        <table id="myTableProdi" class="table table-striped nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Prodi | Jenjang</th>
                                                    <th>UPPS</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allprodi as $c)
                                                <tr id="prodi{{ $c->id }}">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $c->jenjang.'-'.$c->nama_prodi }}<br>
                                                        <span class="badge badge-pill bg-warning">{{ $c->users_count-1 }} akun pengelola</span>
                                                    </td>
                                                    <td>{{ $c->upps }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ url('admin/prodi/'.$c->id) }}" class="btn btn-warning btn-sm me-1"><i class="bi bi-pencil"></i></a>
                                                            @if ($c->users_count == 1)
                                                            <button data-url="{{ url('admin/prodi/'.$c->id.'/destroy') }}" class="btn btn-danger btn-sm removeprodi" data-nama="{{ $c->nama_prodi }}" data-id="{{ $c->id }}" type="button"><i class="bi bi-trash"></i></button>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Prodi | Jenjang</th>
                                                    <th>UPPS</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <script>
                                            $(document).ready(function() {
                                                $('.removeprodi').on('click', function(e) {
                                                    e.preventDefault();
                                                    dataid = $(this).attr("data-id");
                                                    datanama = $(this).attr("data-nama");
                                                    dataurl = $(this).attr("data-url");
                                                    console.log(dataurl);
                                                    swal.fire({
                                                        title: 'Hapus Data...',
                                                        icon: 'warning',
                                                        html: "Yakin ingin menghapus Website/Prodi <b>"+datanama+"</b> ?",
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Ya, Hapus..'
                                                        }).then((removeprodi) => {
                                                            if (removeprodi.isConfirmed) {
                                                                $.ajax({
                                                                    url: ""+dataurl+"",
                                                                    type: 'DELETE',
                                                                    headers: {
                                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                    },
                                                                    success: function(data) {
                                                                        console.log(data['message']);
                                                                        swal.fire({
                                                                            title: 'Proses Website/Prodi Berhasil',
                                                                            text: ''+data['message']+'',
                                                                            icon: 'success',
                                                                            showConfirmButton: false,
                                                                            timer: 1500,
                                                                            timerProgressBar: true,
                                                                        });
                                                                        if (data['status'] == true) {
                                                                            $("#prodi"+dataid).remove();
                                                                        } else {
                                                                            alert('Error occured.');
                                                                        }
                                                                    },
                                                                    error: function(data) {
                                                                        alert(data.responseText);
                                                                    }
                                                                });
                                                            } else {
                                                                swal.close();
                                                            }
                                                        });
                                                });
                        
                                            }); 
                                        </script>
    
                                        <script>
                                            new DataTable('#myTableProdi', {
                                                responsive: true,
                                                dom: 'Bfrtip',
                                                buttons: [
                                                    'pageLength','copy', 'excel', 'pdf', 'print'
                                                ]
                                            });
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
                </div>
            </div>
        </div>
    </div>
    <!-- End Form -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


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