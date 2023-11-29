@extends('layouts.sidebar')

@section('content')
@foreach($errors->all() as $error)
<script>
    Swal.fire({
        icon: 'error',
        title: '<?= $error ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endforeach
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card mb-3">
            <div class="card-body">
                <form method="POST" action="{{ route('vidio-update',$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="exampleInputJudul">Judul</label>
                        <input type="text" class="form-control" id="exampleInputJudul" value="{{$data->judul}}" name="judul" placeholder="Input Judul" required>
                    </div>


                    <div style="display:flex; text-align:left;">
                        <span style="text-align:left;"><img src="{{url('assets/thumbnail/'.$data->foto)}}" alt="" width="150px">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Input Thumbnail</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="form-control" name="" id="exampleInputFile">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputDeskripsi">Deskripsi</label>
                        <textarea class="form-control" id="exampleInputDeskripsi" rows="4" placeholder="Deskripsi" name="deskripsi" required>{{$data->deskripsi}}</textarea>
                    </div>


                    <div style="display:flex; text-align:left;">
                        <span style="text-align:left;"><video src="{{url('assets/vidio/'.$data->vidio)}}" alt="" width="150px"></video>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputVidio">Input Video</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="form-control" name="vidio" id="exampleInputVidio">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection