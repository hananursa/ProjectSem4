<div class="first-widget parallax" id="portfolio">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Posyandu Lansia</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Kader/Data Lansia</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

  <?php foreach ($data_lansia as $data_lansia) : ?>

    <form action="<?= base_url('kader/data_lansia/update_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">
     
        <div class="form-group">
          <label for="">Id Posyandu</label>
          <input type="text" name="id_posyandu" value="<?= $data_lansia->id_posyandu ?>" class="form-control">
          <?= form_error('id_posyandu', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Nama Lansia</label>
          <input type="text" name="nama_lansia" value="<?= $data_lansia->nama_lansia ?>" class="form-control">
          <?= form_error('nama_lansia', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" value="<?= $data_lansia->tanggal_lahir ?>" class="form-control">
          <?= form_error('tanggal_lahir', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Umur</label>
          <input type=number" name="umur" value="<?= $data_lansia->umur ?>" class="form-control">
          <?= form_error('umur', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Jenis Kelamin</label> <br>
            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki  
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
          <?= form_error('jenis_kelamin', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Alamat</label>
          <input type="text" name="alamat" value="<?= $data_lansia->alamat ?>" class="form-control">
          <?= form_error('alamat', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>

<?php endforeach; ?>