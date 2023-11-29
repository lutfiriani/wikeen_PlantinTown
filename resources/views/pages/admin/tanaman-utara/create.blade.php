<div class="modal-header">
    <h4 class="modal-title">Tambah Tanaman Utara</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form method="POST" action="{{ route('tanaman-utara-store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputBarang">Nama Tanaman</label>
            <input type="text" class="form-control" id="exampleInputBarang" name="nama_tanaman" placeholder="Input Nama Tanaman" required>
        </div>

        <div class="form-group">
            <label for="exampleInputKeteranganPerawatan">Keterangan Perawatan</label>
            <textarea class="form-control" id="exampleInputKeteranganPerawatan" rows="4" placeholder="Keterangan Perawatan" name="perawatan" required></textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputKeteranganUmurTanaman">Keterangan Umur Tanaman</label>
            <textarea class="form-control" id="exampleInputKeteranganUmurTanaman" rows="4" placeholder="Keterangan Umur Tanaman" name="umur_tanaman" required></textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputketeranganTanaman">Keterangan Panen</label>
            <textarea class="form-control" id="exampleInputketeranganTanaman" rows="4" placeholder="Keterangan Panen" name="panen" required></textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputAirDanPupuk">Keterangan Air & Pupuk</label>
            <textarea class="form-control" id="exampleInputAirDanPupuk" rows="4" placeholder="Keterangan Air & Pupuk" name="air_pupuk" required></textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputFile">Input Gambar</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="form-control" required name="foto" id="exampleInputFile">
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
    </form>
</div>