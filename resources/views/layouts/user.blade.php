<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PiT!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{url('assets/user/img/PiT! logo 0.2.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('assets/user/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/user/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('assets/user/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('assets/user/css/style.css')}}" rel="stylesheet">

    <link rel="{{url('assets/user/stylesheet')}}" href="css/stylelogin.css">

    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!--Start of Conferbot Script-->
    <script type="text/javascript">
        (function(d, s, id) {
            var js,
                el = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.async = true;
            js.src = 'https://s3.ap-south-1.amazonaws.com/conferbot.defaults/dist/v1/widget.min.js';
            js.id = id;
            js.charset = 'UTF-8';
            el.parentNode.insertBefore(js, el);
            // Initializes the widget when the script is ready
            js.onload = function() {
                var w = window.ConferbotWidget("6546f618b3d7f38922aaa16e", "live_chat");
            };
        })(document, 'script', 'conferbot-js');
    </script>
    <!--End of Conferbot Script-->
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->



        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"> <img src="{{url('assets/user/img/PiT! logo 0.2.png')}}" class="d-inline-block align-text-top"> PiT!</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{url('/')}}" class="nav-item nav-link {{($title == 'Landing Page') ? 'active' : ''}}">Home</a>
                        <a href="{{route('artikel-user')}}" class="nav-item nav-link {{($title == 'Data Artikel') ? 'active' : ''}}">Artikel</a>
                        <a href="{{route('vidio-user')}}" class="nav-item nav-link {{($title == 'Data Video') ? 'active' : ''}}">Video</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{($title == 'Data Tanaman Selatan' || $title == 'Data Tanaman Utara') ? 'active' : ''}}" data-bs-toggle="dropdown">Lokasi</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{url('tanaman-utara-user')}}" class="dropdown-item">Utara</a>
                                <a href="{{url('tanaman-selatan-user')}}" class="dropdown-item">Selatan</a>
                            </div>
                        </div>
                        <a href="{{route('forum')}}" class="nav-item nav-link">Forum</a>
                    </div>

                    @if(Auth::user())
                    <a href="#" class="btn btn-danger py-2 px-4 ms-3" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @else
                    <a href="{{route('login')}}" class="btn btn-primary py-2 px-4 ms-3">Log In</a>
                    @endif
                </div>
            </nav>

            @yield('container-navbar')
        </div>
        <!-- Navbar & Hero End -->

        @yield('container-user')

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-white footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row gy-5 gx-4 pt-5">


                    <div class="col-md-6 col-lg-3">
                        <h5 class="fw-bold text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Vokasi IPB Alamat Jl. Kumbang No. 14, Cilibende Kota Bogor Jawa Barat, Indonesia</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 896 5357 2952</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>wikeeniscan@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Plant In Town</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a>WIKEEN'S GROUP</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <!--<a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>-->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{url('assets/user/js/scriptlogin.js')}}"></script>
    <script src="{{url('assets/user/js/scriptvideo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('assets/user/lib/wow/wow.min.js')}}"></script>
    <script src="{{url('assets/user/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('assets/user/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('assets/user/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{url('assets/user/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('assets/user/js/main.js')}}"></script>

</body>

</html>