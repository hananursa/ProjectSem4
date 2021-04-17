<div class="first-widget parallax" id="portfolio">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Posyandu Lansia</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Kader5/Data Lansia</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

  <form action="<?= base_url('kader5/data_lansia/tambah_data_lansia_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">
      <div class="form-group">
          <label for="">Id Lansia</label>
          <input type="text" name="id_lansia" placeholder="Ketikkan Id Lansia" class="form-control">
          <?= form_error('id_lansia', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Id Posyandu</label>
          <input type="text" name="id_posyandu" placeholder="Ketikkan id posyandu" class="form-control">
          <?= form_error('id_posyandu', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Nama Lansia</label>
          <input type="text" name="nama_lansia" placeholder="Masukkan nama lansia" class="form-control">
          <?= form_error('nama_lansia', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" class="form-control">
          <?= form_error('tanggal_lahir', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Umur</label>
          <input type="text" name="umur" placeholder="Masukkan umur" class="form-control">
          <?= form_error('umur', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Jenis Kelamin</label>
          <input type="text" name="jenis_kelamin" placeholder="Masukkan jenis kelamin" class="form-control">
          <?= form_error('jenis_kelamin', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Alamat</label>
          <input type="text" name="alamat" placeholder="Masukkan alamat" class="form-control">
          <?= form_error('alamat', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
</div>