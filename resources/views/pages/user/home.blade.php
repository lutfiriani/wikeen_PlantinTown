@extends('layouts.user')

@section('container-navbar')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 pt-5 text-center text-lg-start">
                <h1 class="display-4 text-white mb-4 animated slideInLeft">Plant in Town</h1>
                <p class="text-white animated slideInLeft">Tumbuhkan Kebahagiaan dalam Kota Bersama
                    Plant In Town!</p>
                </h1>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid animated zoomIn" src="{{url('assets/user/img/orang.png')}}" alt="">
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


<!-- Domain Search Start -->
<div class="container-xxl domain mb-5" style="margin-top: 90px;">
    <div class="container px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title position-relative text-center mx-auto mb-4 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Dari mana asalmu?</h1>
                    <p class="mb-1">Bingung tanaman apa yang cocokditanam di daerahmu? tenang saja,</p>
                    <p>"PIT!" dapat membantu kamu dengan menyediakan informasi seputar tanaman apa saja yang
                        cocok ditanam di daerahmu tinggal!</p>
                </div>
                <div class="position-relative w-100 my-3 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"></p>

                </div>
                <!-- <div class="row g-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.com</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.net</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.org</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.us</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.eu</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                                <h5 class="fw-bold text-primary mb-1">.co.uk</h5>
                                <p class="mb-0">$9.99/year</p>
                            </div>
                        </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Domain Search End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-4">
                    <h1 class="mb-2">Hai PiT Growers!</h1>
                </div>
                <p class="justify">PiT! adalah sebuah platform web inovatif yang menggabungkan teknologi AI dan
                    pengetahuan pertanian untuk membantu
                    individu, komunitas, dan petani perkotaan dalam menanam tanaman secara efisien dalam ruang
                    terbatas.
                    Dengan tampilan antarmuka yang intuitif dan ramah pengguna, web kami memungkinkan pengguna
                    untuk mengelola
                    dan merawat tanaman mereka dengan mudah.</p>
                <div class="row g-3">
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-light rounded text-center p-4">
                            <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                            <h2 class="mb-1" data-toggle="counter-up">4</h2>
                            <p class="mb-0">Jenis Tanaman</p>
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
                            <p class="mb-0">Pengunjung situs</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/home_pict.png">
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Pricing Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Ingin mendapatkan rekomendasi dari PiT!?</h1>
            <p class="mb-1">Tentu, berikut adalah beberapa contoh rekomendasi yang mungkin diberikan oleh PiT! :
            </p>
        </div>
        <div class="row gy-5 gx-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="position-relative shadow rounded border-top border-5 border-hijau">
                    <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                        <!-- <i class="fa fa-share-alt text-white"></i> -->
                    </div>
                    <div class="text-center border-bottom p-4 pt-5">
                        <h4 class="fw-bold">Jenis Tanaman</h4>
                        <p class="justify">Berdasarkan ruang dan kondisi lingkungan Anda, PiT! mungkin
                            merekomendasikan jenis tanaman tertentu yang cocok untuk ditanam.</p>
                        <br>
                    </div>
                    <div class="p-4">
                        <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Sayuran</p>
                        <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Tanaman Hias
                        </p>
                        <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Buah-buahan
                        </p>
                        <p><i class="fa fa-check text-primary me-3"></i>Herba/Obat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="position-relative shadow rounded border-top border-5 border-secondary">
                    <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                        <!-- <i class="fi fi-rs-hand-holding-seeding"></i> -->
                    </div>
                    <div class="text-center border-bottom p-4 pt-5">
                        <h4 class="fw-bold">"Tanaman apa yang harus kutanam?"</h4>
                        <p class="justify">Ingin tau tanaman apa saja yang dapat ditanam di daerah kamu? PiT!
                            siap menjawab itu. Ayo klik di bagian mana kamu tinggal!</p>
                    </div>
                    <div class="text-center border-bottom p-4">
                        <a class="btn btn-primary px-4 py-2" href="utara.html"> Utara </a>
                    </div>
                    <div class="text-center border-bottom p-4">
                        <a class="btn btn-primary px-4 py-2" href="selatan.html">Selatan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="position-relative shadow rounded border-top border-5 border-primary">
                    <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                        <!-- <i class="fa fa-server text-white"></i> -->
                    </div>
                    <div class="text-center border-bottom p-4 pt-5">
                        <h4 class="fw-bold">Video dan Artikel</h4>
                        <p class="justify">Ada beberapa video, yang akan memberitahu kalian terkait cara merawat
                            urban farming.</p>
                        <br> <br>
                    </div>
                    <div class="p-4">
                        <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Belajar Urban
                            Farming</p>
                        <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Membangun
                            Kebun Farming</p>
                        <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Tips Seputar
                            Urban Farming</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Sistem Budidaya</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Pricing End -->
@endsection