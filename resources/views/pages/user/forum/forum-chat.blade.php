@extends('layouts.topbar')

@section('content')
<div class="card" style="padding: 2rem;">
    <div class="d-flex">
        <i class="fas fa-user-circle" style="font-size: 40px; padding-top: 0.3rem; padding-right: 1rem;"></i>
        <p><b>{{$data['penulis']}}</b> <br>{{$data['created_at'] }}</p>
    </div>
    <h4 class="fw-bold mt-3">{{$data['judul'] }}</h4>
    <p class="fw-bold ">{{$data['deskripsi'] }}</p>
    <hr>

    @foreach($data['comment'] as $index => $comment)

    <div class="card mb-3" style="padding:1rem; background-color: lightgray;">
        <div class="row">
            <div class="col-1" style="text-align: center;">
                <i class="fas fa-user-circle" style="font-size:60px;"></i>
            </div>
            <div class="col-11">
                <h6 class="fw-bold">{{$comment['pengirim']}}</h6>
                <p style="font-weight: 500;">{{$comment['pesan']}}</p>
            </div>
        </div>
    </div>
    @endforeach

    <form action="{{route('forum-update',$data['_id'])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group mt-5">
            <input type="text" class="form-control" placeholder="Pesan" name="pesan" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button type="submit" class="btn btn-success" id="basic-addon2"><i class="fas fa-paper-plane"></i> Kirim</button>
            </div>
        </div>
    </form>
</div>

</div>
@endsection