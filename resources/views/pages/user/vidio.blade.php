@extends('layouts.user')

@section('container-navbar')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 pt-5">
            <div class="col-12 text-center text-lg-start">
                <h1 class="display-4 text-white animated slideInLeft">Video</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-start animated slideInLeft">
                        <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Video</li>
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


<!-- Pricing Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Video</h1>
            <p class="mb-1">Berikut adalah beberapa rekomendasi video yang dapat anda liat.</p>
        </div>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

            * {
                font-family: 'Poppins', sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                outline: none;
                border: none;
                text-decoration: none;
                text-transform: capitalize;
            }



            .container {
                max-width: 1200px;
                margin: 100px auto;
                display: flex;
                flex-wrap: wrap;
                align-items: flex-start;
                gap: 20px;
            }

            .container .main-video-container {
                flex: 1 1 700px;
                border-radius: 5px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
                background-color: #fff;
                padding: 15px;
            }

            .container .main-video-container .main-video {
                margin-bottom: 7px;
                border-radius: 5px;
                width: 100%;
            }

            .container .main-video-container .main-vid-title {
                font-size: 20px;
                color: #444;
            }

            .container .video-list-container {
                flex: 1 1 350px;
                height: 485px;
                overflow-y: scroll;
                border-radius: 5px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
                background-color: #fff;
                padding: 15px;
            }

            .container .video-list-container::-webkit-scrollbar {
                width: 10px;
            }

            .container .video-list-container::-webkit-scrollbar-track {
                background-color: #fff;
                border-radius: 5px;
            }

            .container .video-list-container::-webkit-scrollbar-thumb {
                background-color: #444;
                border-radius: 5px;
            }

            .container .video-list-container .list {
                display: flex;
                align-items: center;
                gap: 15px;
                padding: 10px;
                background-color: #eee;
                cursor: pointer;
                border-radius: 5px;
                margin-bottom: 10px;
            }

            .container .video-list-container .list:last-child {
                margin-bottom: 0;
            }

            .container .video-list-container .list.active {
                background-color: #444;
            }

            .container .video-list-container .list.active .list-title {
                color: #fff;
            }

            .container .video-list-container .list .list-video {
                width: 100px;
                border-radius: 5px;
            }

            .container .video-list-container .list .list-title {
                font-size: 17px;
                color: #444;
            }

            @media (max-width:1200px) {

                .container {
                    margin: 0;
                }

            }

            @media (max-width:450px) {

                .container .main-video-container .main-vid-title {
                    font-size: 15px;
                    text-align: center;
                }

                .container .video-list-container .list {
                    flex-flow: column;
                    gap: 10px;
                }

                .container .video-list-container .list .list-video {
                    width: 100%;
                }

                .container .video-list-container .list .list-title {
                    font-size: 15px;
                    text-align: center;
                }

            }
        </style>


        <div class="container">
            @if(count($data) != 0)
            <div class="main-video-container">
                <video src="{{url('assets/vidio', $vidio['vidio'] )}}" loop controls class="main-video"></video>
                <h3 class="main-vid-title">Video tentang Tanaman Hidroponik</h3>
                <p>{{$vidio['deskripsi']}}</p>
            </div>

            <div class="video-list-container">
                @foreach($data as $data)
                <a href="{{route('vidio-detail', $data['_id'])}}">
                    <div class="list {{($data['_id'] == $vidio['_id']) ? 'active' : '' }}"> <img src="{{url('assets/thumbnail', $data['foto'] )}}">
                        <h3 class="list-title">Cara Merawat Hidroponik</h3>
                    </div>
                </a>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    <!-- Pricing End -->
    @endsection