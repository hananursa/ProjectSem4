<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-database"></i> Form Tambah Data Kader
  </div>

  <form action="<?= base_url('administrator/data_kader/tambah_data_kader_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">
      
      <div class="form-group">
          <label for="">Id Posyandu</label>
          <input type="text" name="id_posyandu" placeholder="Ketikkan Id posyandu" class="form-control">
          <?= form_error('id_posyandu', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Nama Kader</label>
          <input type="text" name="nama_kader" placeholder="Masukkan Nama Kader" class="form-control">
          <?= form_error('nama_kader', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" name="username_kader" placeholder="Masukkan username" class="form-control">
          <?= form_error('username_kader', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">No HP</label>
          <input type="text" name="no_hp" placeholder="Masukkan no hp" class="form-control">
          <?= form_error('no_hp', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="pass_kader" placeholder="Masukkan password" class="form-control">
          <?= form_error('pass_kader', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Id role</label>
          <input type="text" name="level" placeholder="Masukkan level" class="form-control">
          <?= form_error('level', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
</div>