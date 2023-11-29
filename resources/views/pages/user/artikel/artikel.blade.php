@extends('layouts.user')

@section('container-navbar')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 pt-5">
            <div class="col-12 text-center text-lg-start">
                <h1 class="display-4 text-white animated slideInLeft">Artikel</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-start animated slideInLeft">
                        <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Artikel</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection


@section('container-user')
<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(29, 40, 51, 0.8);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                    <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-4">
                    <h1 class="mb-2">Artikel</h1>
                </div>
                <p class="mb-4">Di dalam tulisan ini, kami akan menjelaskan bagaimana memulai urban farming.</p>
                <div class="row g-3">
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-light rounded text-center p-4">
                            <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                            <h2 class="mb-1" data-toggle="counter-up">6</h2>
                            <p class="mb-0">Banyaknya artikel</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="bg-light rounded text-center p-4">
                            <i class="fa fa-users fa-2x text-primary mb-2"></i>
                            <h2 class="mb-1" data-toggle="counter-up">18000</h2>
                            <p class="mb-0">Masyarakat Urban</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-light rounded text-center p-4">
                            <i class="fa fa-check fa-2x text-primary mb-2"></i>
                            <h2 class="mb-1" data-toggle="counter-up">500</h2>
                            <p class="mb-0">Pengguna situ PiT!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img class="img-fluid wow zoomIn" data-wow-delay="1s" src="public/assets/artikel/article_pict.png">
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Featured News Slider Start -->
<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="owl-carousel news-carousel carousel-item-4 position-relative">
            <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid h-100" src="img/news-700x435-1.jpg" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                </div>
            </div>
            <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid h-100" src="img/news-700x435-2.jpg" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                </div>
            </div>
            <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid h-100" src="img/news-700x435-3.jpg" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                </div>
            </div>
            <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid h-100" src="img/news-700x435-4.jpg" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                </div>
            </div>
            <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid h-100" src="img/news-700x435-5.jpg" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured News Slider End -->


<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                        </div>
                    </div>

                    @if(count($data) != 0)
                    @foreach($data as $data)
                    <div class="col-lg-6 mt-2">
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img class="img-fluid" src="{{url('assets/artikel/'. $data['foto'])}}" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""></a>
                                    <a class="text-body" href=""><small>{{$data['tanggal']}}</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="{{route('artikel-detail',$data['_id'] )}}">{{substr($data['judul'], 0,25)}}...</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>

            <div class="col-lg-4">
                <!-- Tags Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Tomat</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Aeroponik</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">TipsTrik</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Trend</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">FarmingIdea</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">daunhijau</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">penyiraman</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">buah</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Tanaman Hias</a>
                        </div>
                    </div>
                </div>
                <!-- Tags End -->
                <!-- Popular News Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Article you may like</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        @if(count($article_like) != 0)
                        @php $count = 1; @endphp
                        @foreach($article_like as $article_like)
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img class="img-fluid" src="{{url('assets/artikel/'. $article_like['foto'])}}" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""></a>
                                    <a class="text-body" href=""><small>{{$article_like['tanggal']}}</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="{{route('artikel-detail',$article_like['_id'] )}}">{{substr($article_like['judul'], 0,25)}}...</a>
                            </div>
                        </div>
                        @if($count == 4 ) break; @endif
                        @php $count++; @endphp
                        @endforeach
                        @endif
                    </div>

                </div>
                <!-- Popular News End -->

            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->

<!-- Testimonial Start -->
<div class=" container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container px-lg-5">
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                    <i class="fa fa-quote-left text-white"></i>
                </div>
                <p class="mt-3">Ingin Memulai Urban Farming? Ini 5 Hal yang Wajib Anda Tahu!</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/artikel2" style="width: 50px; height: 50px;">
                    <div class="text-center border-bottom p-4">
                        <a class="btn btn-primary px-4 py-2" href="https://journal.sociolla.com/lifestyle/tips-urban-farming">Klik</a>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                    <i class="fa fa-quote-left text-white"></i>
                </div>
                <p class="mt-3">Urban Farming jadi Tren, Intip 10 Tips Seru Bercocok Tanam di Perkotaan</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/artikel2" style="width: 50px; height: 50px;">
                    <div class="text-center border-bottom p-4">
                        <a class="btn btn-primary px-4 py-2" href="https://www.suaramerdeka.com/gaya-hidup/049953808/urban-farming-jadi-tren-intip-10-tips-seru-bercocok-tanam-di-perkotaan">Klik</a>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                    <i class="fa fa-quote-left text-white"></i>
                </div>
                <p class="mt-3">Urban Farming : Solusi Ketahanan Pangan Rumah Tangga Perkotaan</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/artikel2" style="width: 50px; height: 50px;">
                    <div class="text-center border-bottom p-4">
                        <a class="btn btn-primary px-4 py-2" href="https://babelprov.go.id/artikel_detil/urban-farming-solusi-ketahanan-pangan-rumah-tangga-perkotaan">Klik</a>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 mt-4">
                <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                    <i class="fa fa-quote-left text-white"></i>
                </div>
                <p class="mt-3">Urban Farming sebagai upaya ketahanan pangan keluarga</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/artikel2" style="width: 50px; height: 50px;">
                    <div class="text-center border-bottom p-4">
                        <a class="btn btn-primary px-4 py-2" href="https://jurnal.dharmawangsa.ac.id/index.php/reswara/article/view/1552">Klik</a>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                    <i class="fa fa-quote-left text-white"></i>
                </div>
                <p class="mt-3">Urban Farming dan Ketahanan Pangan Indonesia</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/artikel2" style="width: 50px; height: 50px;">
                    <div class="text-center border-bottom p-4">
                        <a class="btn btn-primary px-4 py-2" href="https://insight.kontan.co.id/news/urban-farming-dan-ketahanan-pangan-indonesia">Klik</a>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
                <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                    <i class="fa fa-quote-left text-white"></i>
                </div>
                <p class="mt-3">Meningkatkan kemandirian pangan melalui “urban farming”</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/artikel2" style="width: 50px; height: 50px;">
                    <div class="text-center border-bottom p-4">
                        <a class="btn btn-primary px-4 py-2" href="https://www.antaranews.com/berita/3257693/meningkatkan-kemandirian-pangan-melalui-urban-farming">Klik</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection