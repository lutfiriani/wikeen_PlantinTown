@extends('layouts.topbar')

@section('content')
<h3 class="fw-bold">Post Topik</h3>
<hr>
<div class="card">
    <div class="card-body" style="padding: 3rem;">
        <form action="{{route('forum-store')}}" method="POST">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Topik</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" required name="judul">
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleInputKeteranganPerawatan" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleInputKeteranganPerawatan" rows="4" name="deskripsi" required></textarea>
                </div>
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>
@endsection