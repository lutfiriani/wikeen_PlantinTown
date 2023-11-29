<div class="modal-header">
    <h4 class="modal-title">Tambah Vidio</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form method="POST" action="{{ route('vidio-store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputJudul">Judul</label>
            <input type="text" class="form-control" id="exampleInputJudul" name="judul" placeholder="Input Judul" required>
        </div>

        <div class="form-group">
            <label for="exampleInputFile">Input Thumbnail</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="form-control" required name="foto" id="exampleInputFile">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleInputDeskripsi">Deskripsi</label>
            <textarea class="form-control" id="exampleInputDeskripsi" rows="4" placeholder="Deskripsi" name="deskripsi" required></textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputVidio">Input Video</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="form-control" required name="vidio" id="exampleInputVidio">
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
    </form>
</div>