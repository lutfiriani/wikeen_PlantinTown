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
                <form method="POST" action="{{ route('tanaman-selatan-update',$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputBarang">Nama Tanaman</label>
                        <input type="text" class="form-control" id="exampleInputBarang" name="nama_tanaman" value="{{$data->nama_tanaman}}" placeholder="Input Nama Tanaman" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputKeteranganPerawatan">Keterangan Perawatan</label>
                        <textarea class="form-control" id="exampleInputKeteranganPerawatan" rows="4" placeholder="Keterangan Perawatan" name="perawatan" required>{{$data->perawatan}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputKeteranganUmurTanaman">Keterangan Umur Tanaman</label>
                        <textarea class="form-control" id="exampleInputKeteranganUmurTanaman" rows="4" placeholder="Keterangan Umur Tanaman" name="umur_tanaman" required>{{$data->umur_tanaman}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputketeranganTanaman">Keterangan Panen</label>
                        <textarea class="form-control" id="exampleInputketeranganTanaman" rows="4" placeholder="Keterangan Panen" name="panen" required>{{$data->panen}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputAirDanPupuk">Keterangan Air & Pupuk</label>
                        <textarea class="form-control" id="exampleInputAirDanPupuk" rows="4" placeholder="Keterangan Air & Pupuk" name="air_pupuk" required>{{$data->air_pupuk}}</textarea>
                    </div>

                    <div style="display:flex; text-align:left;">
                        <span style="text-align:left;"><img src="{{url('assets/tanaman-selatan/'.$data->foto)}}" alt="" width="150px">
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleInputFile">Input Gambar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="form-control" name="foto" id="exampleInputFile">
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