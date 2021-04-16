<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-database"></i> Form Tambah Data Puskesmas
  </div>

  <form action="<?= base_url('administrator/data_puskesmas/tambah_data_puskesmas_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">
      <div class="form-group">
          <label for="">No</label>
          <input type="text" name="id_admin" placeholder="Ketikkan No Admin" class="form-control">
          <?= form_error('id_admin', '<div class="text-danger small">', '</div>'); ?>
        </div>
      <div class="form-group">
          <label for="">Nama Admin</label>
          <input type="text" name="nama_admin" placeholder="Ketikkan Nama Admin" class="form-control">
          <?= form_error('nama_admin', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" name="username" placeholder="Masukkan username" class="form-control">
          <?= form_error('username', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="password" placeholder="Masukkan password" class="form-control">
          <?= form_error('password', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Id role</label>
          <input type="id_role" name="id_role" placeholder="Masukkan id_role" class="form-control">
          <?= form_error('id_role', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
</div>