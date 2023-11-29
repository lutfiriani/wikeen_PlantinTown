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
                <form method="POST" action="{{ route('artikel-store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputPenulis">Penulis</label>
                        <input type="text" class="form-control" id="exampleInputPenulis" name="penulis" placeholder="Input Penulis" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputJudul">Judul</label>
                        <input type="text" class="form-control" id="exampleInputJudul" name="judul" placeholder="Input Judul" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputDate">Tanggal</label>
                        <input type="date" class="form-control" id="exampleInputDate" name="tanggal" placeholder="Input Tanggal" required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="exampleInputFile">Input Thumbnail</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="form-control" name="foto" id="exampleInputFile" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label for="exampleInputFile">Konten</label>
                        <textarea id="summernote" name="konten" required>Isi <u>Konten</u> <strong>Disini</strong> </textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection