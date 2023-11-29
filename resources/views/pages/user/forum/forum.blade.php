@extends('layouts.topbar')

@section('content')
<h2 class="fw-bold">{{Auth::user()->name}} Selamat Datang Di Forum Diskusi</h2>
<h3 class="fw-bold mt-5">Daftar Topik</h3>
<hr>

@if(count($data) != 0)
@foreach($data as $data)
<a href="{{route('forum-show',$data['_id'])}}">
    <div class="card mb-3" style="padding:2rem">
        <div class="row">
            <div class="col-2" style="text-align: center;">
                <i class="fas fa-comments" style="font-size: 60px; "></i>
            </div>
            <div class="col-8">
                <h3 class="fw-bold">{{$data['judul']}}</h3>
                <p style="font-weight: 500;">Dari : {{$data['penulis']}} - {{$data['created_at']}}</p>
            </div>
        </div>
    </div>
</a>
@endforeach
@endif
@endsection