<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Blog Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/monokai-sublime.min.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{url('assets/user/artikel/assets/css/theme-1.css')}}">


</head>

<body>

    <header class="header text-center">
        <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">PiT!'s Blog</a></h1>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <div class="profile-section pt-3 pt-lg-0">
                    <img class="profile-image mb-3 rounded-circle mx-auto" src="{{url('assets/user/artikel/assets/images/PiT! logo 0.2.png')}}" alt="image"> <br> <br>

                    <div class="bio mb-3">Tumbuhkan Kebahagiaan dalam Kota Bersama Plant In Town!<br>
                        <!--//bio-->

                        <hr>
                    </div><!--//profile-section-->

                    <ul class="navbar-nav flex-column text-left">
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('/artikel-user')}}"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog Post</a>
                        </li>
                    </ul>
                </div>
        </nav>
    </header>

    <div class="main-wrapper">

        <article class="blog-post px-3 py-5 p-md-5">
            <div class="container">
                <header class="blog-post-header">
                    <h2 class="title mb-2">{{$data['judul']}}</h2>
                    <div class="meta mb-3"><span class="date">{{$data['penulis']}}</span><span class="time">{{$data['tanggal']}}</span></div>
                </header>

                <div class="blog-post-body">
                    {!!$data['konten']!!}
                    <!-- <figure class="blog-banner">
                        <a href="https://made4dev.com"><img class="img-fluid" src="{{url('assets/user/artikel/assets/images/blog1.jpg')}}" alt="image"></a>
                        <figcaption class="mt-2 text-center image-caption">Image Credit: <a href="https://made4dev.com?ref=devblog" target="_blank">www.freepik.com</a></figcaption>
                    </figure>
                    <p>Pertumbuhan populasi yang cepat dan urbanisasi yang terus berlanjut telah menghadirkan tantangan baru dalam penyediaan makanan,
                        lingkungan yang berkelanjutan, dan kesejahteraan masyarakat di kota-kota di seluruh dunia. Urban farming, atau pertanian perkotaan,
                        adalah konsep yang telah muncul sebagai solusi inovatif untuk mengatasi beberapa masalah ini.
                        Artikel ini akan mengulas urban farming, konsepnya, manfaatnya, dan bagaimana ia berkontribusi pada pembangunan kota yang berkelanjutan.
                    </p>

                    <h3 class="mt-5 mb-3">Apa Itu Urban Farming?</h3>
                    <p>Urban farming adalah praktik bercocok tanam, budidaya hewan, dan produksi pangan di lingkungan perkotaan.
                        Ini bisa berupa taman-taman komunitas, rooftop gardens, pertanian vertikal, kolam ikan di halaman belakang,
                        atau penggunaan lahan kosong di kota untuk menghasilkan makanan. Tujuan utama dari urban farming adalah untuk
                        meningkatkan akses masyarakat perkotaan terhadap pangan segar, meminimalkan jarak antara produksi dan konsumsi,
                        dan mengurangi dampak lingkungan dari transportasi pangan.
                    </p> -->

                </div><!--//blog-comments-section-->

            </div><!--//container-->
        </article>

        <footer class="footer text-center py-2 theme-bg-dark">

            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

        </footer>

    </div><!--//main-wrapper-->


    <!-- Javascript -->
    <script src="{{url('assets/user/aartikel/assets/plugins/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('assets/user/aartikel/assets/plugins/popper.min.js')}}"></script>
    <script src="{{url('assets/user/aartikel/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Page Specific JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>

    <!-- Custom JS -->
    <script src="{{url('assets/user/aartikel/assets/js/blog.js')}}"></script>

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="{{url('assets/user/aartikel/assets/js/demo/style-switcher.js')}}"></script>


</body>

</html>