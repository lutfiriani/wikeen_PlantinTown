@extends('layouts.user')

@section('container-navbar')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 pt-5">
            <div class="col-12 text-center text-lg-start">
                <h1 class="display-4 text-white animated slideInLeft">Utara</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-start animated slideInLeft">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Lokasi</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Utara</li>
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


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Utara</h1>
            <p class="mb-1">Apakah tempat tinggalmu berada di wilayah utara Indonesia? Wilayah utara itu
                meliputi mana saja ya? Wilayah utara Indonesia mencakup pulau-pulau seperti Sumatra, Kalimantan,
                Sulawesi, dan juga berbagai kepulauan kecil.
                Adapun jenis-jenis tanaman yang dapat ditanam di bagian utara Indonesia :
            </p>
        </div>
        <div class="row g-4">
            @if(count($data) != 0)
            @foreach($data as $data)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                    <a href="{{route('tanaman-utara-detail',$data['_id'])}}">
                        <div class="text-center p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{url('assets/tanaman-utara',$data['foto'])}}" alt="">
                            <h5 class="fw-bold mb-1">{{$data['nama_tanaman']}}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
</div>
<!-- Team End -->
<!-- Pricing End -->
@endsection