<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Users / Profile - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{url('assets/user/img/PiT! logo 0.2.png')}}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('assets/user/template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/user/template/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('assets/user/template/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/user/template/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{url('assets/user/template/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{url('assets/user/template/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{url('assets/user/template/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('assets/user/template/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <img src="{{url('assets/user/img/PiT! logo 0.2.png')}}" alt="">
                <span class="d-none d-lg-block">PiT!</span>
            </a>
        </div><!-- End Logo -->


    </header><!-- End Header -->


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{$data['nama_tanaman']}}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    @if($data['lokasi'] == 'utara')
                    <li class="breadcrumb-item"><a href="{url('tanaman-utara-user')}">Utara</a></li>
                    @else
                    <li class="breadcrumb-item"><a href="{url('tanaman-selatan-user')}">Selatan</a></li>
                    @endif
                    <li class="breadcrumb-item active"><a href="#">{{$data['nama_tanaman']}}</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            @if($data['lokasi'] == 'utara')
                            <img src="{{url('assets/tanaman-utara',$data['foto'])}}" alt="Profile" class="rounded-circle">
                            @else
                            <img src="{{url('assets/tanaman-selatan',$data['foto'])}}" alt="Profile" class="rounded-circle">
                            @endif
                            <h2>{{$data['nama_tanaman']}}</h2>
                            <h3>{{$data['lokasi']}}</h3>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Perawatan</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Umur Tanaman</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Panen</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Air & Pupuk</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">
                                <!--Perawatan-->
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-5">{{$data['perawatan']}}</div>
                                    </div>
                                </div>

                                <!--Perawatan-->

                                <!-- Umur Tanaman -->
                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                    <div class="row mb-3">
                                        <div class="col-md-5 col-lg-12">
                                            {{$data['umur_tanaman']}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Umur Tanaman -->


                            <div class="tab-pane fade pt-3" id="profile-settings">

                                <!-- Panen -->
                                <div class="row mb-3">
                                    <div class="col-md-5 col-lg-12">
                                        {{$data['panen']}}
                                    </div>
                                </div>

                                <!-- End Panen -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">

                                <!-- Panen -->
                                <div class="row mb-3">
                                    <div class="col-md-5 col-lg-12">
                                        {{$data['air_pupuk'] }}
                                    </div>
                                </div>

                                <!-- End Panen -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>PiT!</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">WIKEEN</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{url('assets/user/template/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{url('assets/user/template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/user/template/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{url('assets/user/template/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{url('assets/user/template/vendor/quill/quill.min.js')}}"></script>
    <script src="{{url('assets/user/template/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{url('assets/user/template/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{url('assets/user/template/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('assets/user/template/js/main.js')}}"></script>

</body>

</html>