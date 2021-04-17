<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script>
function nilai() {
      var txtFirstNumberValue = document.getElementById('bb_lansia').value;
      var txtSecondNumberValue = document.getElementById('tinggi_badan').value;
      var result = parseInt(txtFirstNumberValue)/ (parseInt(txtSecondNumberValue) * parseInt(txtSecondNumberValue) / 10000) ;

      if (!isNaN(result)) {
         document.getElementById('IMT').value = result;
      }
}
</script>

<div class="first-widget parallax" id="portfolio">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Posyandu Lansia</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Kader3/Data Kesehatan</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

  <form action="<?= base_url('kader3/data_kes_lansia/tambah_data_kes_lansia_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">
      <div class="form-group">
          <label for="">Id Kesehatan</label>
          <input type="text" name="id_kesehatan" placeholder="Ketikkan Id Kesehatan" class="form-control">
          <?= form_error('id_kesehatan', '<div class="text-danger small">', '</div>'); ?>
        </div>
      <div class="form-group">
          <label for="">Id Lansia</label>
          <input type="text" name="id_lansia" placeholder="Ketikkan Id Lansia" class="form-control">
          <?= form_error('id_lansia', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Tanggal Cek</label>
          <input type="date" name="tanggal_cek" placeholder="Masukkan Tanggal" class="form-control">
          <?= form_error('tanggal_cek', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">BB lansia</label>
          <input type="number" name="bb_lansia" id="bb_lansia" onkeyup="nilai();" placeholder="Masukkan berat badan" class="form-control">
          <?= form_error('bb_lansia', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Tingi lansia</label>
          <input type="number" name="tinggi_badan" id="tinggi_badan" onkeyup="nilai();" placeholder="Masukkan tinggi badan" class="form-control">
          <?= form_error('tinggi_badan', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">IMT</label>
          <input readonly type="number" name="IMT" id="IMT" placeholder="Masukkan IMT" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Tensi Sistolik</label>
          <input type="tensi_sistolik" name="tensi_sistolik" placeholder="Masukkan tensi sistolik" class="form-control">
          <?= form_error('tensi_sistolik', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Tensi Diastolik</label>
          <input type="tensi_diastolik" name="tensi_diastolik" placeholder="Masukkan tensi diastolik" class="form-control">
          <?= form_error('tensi_diastolik', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
</div>