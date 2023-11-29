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
    <link rel="stylesheet" href="{{url('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <link href="{{url('assets/user/template/css/style.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        .active {
            font-weight: bold;
            color: #7ebc12;
        }

        a {
            color: black;
            font-weight: bold;
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between w-100" style="">
            <a href=" index.html" class="logo d-flex align-items-center">
                <img src="{{url('assets/user/img/PiT! logo 0.2.png')}}" alt="">
                <span class="d-none d-lg-block">Forum Diskusi PiT!</span>
            </a>

            <div class="align-items-center" style="width:60%;">
                <a href="{{route('forum')}}" class="{{($title == 'Forum') ? 'active' : '' }}" style="margin-right: 2rem;">Forum</a>
                <a href="{{route('forum-create')}}" class="{{($title == 'Post Forum') ? 'active' : '' }}" style="margin-right: 2rem;">Post Topik</a>
                <a href="{{url('/')}}" class="btn btn-success fw-bold" style="background-color: #7ebc12; border: 1px solid #7ebc12;">Home</a>
            </div>
        </div><!-- End Logo -->
    </header><!-- End Header -->

    <main style="width: 100%;">
        <div class="container pt-4">
            @yield('content')
        </div>
    </main><!-- End #main -->


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

    @include('sweetalert::alert')
</body>

</html>