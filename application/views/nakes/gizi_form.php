<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-database"></i> Form Tambah Data Gizi
  </div>

  <form action="<?= base_url('nakes/gizi/tambah_gizi_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">
      <div class="form-group">
          <label for="">Id Gizi</label>
          <input type="text" name="id_gizi" placeholder="Ketikkan Id Gizi" class="form-control">
          <?= form_error('id_gizi', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Jenis Gizi</label> <br>
          <input type="radio" name="jenis" value="makanan"> Makanan <br>
          <input type="radio" name="jenis" value="vitamin"> Vitamin <br>
          <?= form_error('jenis', '<div class="text-danger small">', '</div>'); ?>
       </div>  
        <div class="form-group">
          <label for="">Tanggal </label>
          <input type="date" name="tanggal" placeholder="Masukkan tanggal" class="form-control">
          <?= form_error('tanggal', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Keterangan</label>
          <input type="keterangan" name="keterangan" placeholder="Masukkan password" class="form-control">
          <?= form_error('keterangan', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Gambar</label>
          <input type="gambar" name="gambar" placeholder="Masukkan gambar" class="form-control">
          <?= form_error('gambar', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Status</label> <br>
          <input type="radio" name="status" value="belumdiberikan"> Belum Diberikan <br>
          <input type="radio" name="status" value="sudahdiberikan"> Sudah Diberikan <br>
          <?= form_error('status', '<div class="text-danger small">', '</div>'); ?>
        </div> 
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
</div>