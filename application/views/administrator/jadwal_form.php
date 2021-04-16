<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-database"></i> Form Tambah Data Jadwal Kegiatan Lansia
  </div>

  <?php echo form_open_multipart('administrator/jadwal_kegiatan/tambah_jadwal_kegiatan_aksi') ?>
    <div class="row">
      <div class="col-md-6">
      <div class="form-group">
          <label for="">Id Jadwal</label>
          <input type="text" name="id_jadwal" placeholder="Ketikkan Id Jadwal" class="form-control">
          <?= form_error('id_jadwal', '<div class="text-danger small">', '</div>'); ?>
        </div>
      <div class="form-group">
          <label for="">Id Lansia</label>
          <input type="text" name="id_lansia" placeholder="Ketikkan Id Lansia" class="form-control">
          <?= form_error('id_lansia', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Kegiatan</label>
          <input type="text" name="kegiatan" placeholder="Masukkan kegiatan" class="form-control">
          <?= form_error('kegiatan', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Waktu</label>
          <input type="date" name="waktu" placeholder="Masukkan waktu" class="form-control">
          <?= form_error('waktu', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Keterangan</label>
          <input type="keterangan" name="keterangan" placeholder="Masukkan Keterangan" class="form-control">
          <?= form_error('keterangan', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Gambar</label>
          <input type="file" name="gambar" placeholder="gambar" class="form-control">
          <?= form_error('gambar', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  <?php echo form_close(); ?>
</div>