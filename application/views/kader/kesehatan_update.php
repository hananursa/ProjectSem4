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
						<span class="page-location">Kader/Data Kesehatan</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

    <?php foreach ($data_kes_lansia as $data_kes_lansia) : ?>

        <form action="<?= base_url('kader/data_kes_lansia/update_aksi') ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                        <label for="">Id Kesehatan Lansia</label><br>
                        <input type="text" name="id_kesehatan" placeholder="Ketikkan Id Kesehatan" class="form-control" value="<?= $data_kes_lansia->id_lansia ?>">
                        <?= form_error('id_kesehatan', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Id Posyandu</label><br>
                        <input type="text" name="id_posyandu" placeholder="Ketikkan Id Kesehatan" class="form-control" value="<?= $data_kes_lansia->id_lansia ?>">
                        <?= form_error('id_posyandu', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Id Lansia</label><br>
                        <input type="text" name="id_lansia" placeholder="Ketikkan Nama Admin" class="form-control" value="<?= $data_kes_lansia->id_lansia ?>">
                        <?= form_error('id_lansia', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Tangal Cek</label><br>
                        <input type="date" name="tanggal_cek" placeholder="Masukkan username" class="form-control" value="<?= $data_kes_lansia->tanggal_cek?>">
                        <?= form_error('tanggal_Cek', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">BB Lansia</label><br>
                        <input type="number" name="bb_lansia" id="bb_lansia" placeholder="Masukkan BB" onkeyup="nilai();" class="form-control" value="<?= $data_kes_lansia->bb_lansia ?>">
                        <?= form_error('bb_lansia', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Tinggi lansia</label>
                        <input type="number" name="tinggi_badan" id="tinggi_badan" onkeyup="nilai();" placeholder="Masukkan tinggi badan" class="form-control" value="<?= $data_kes_lansia->tinggi_badan ?>">
                        <?= form_error('tinggi_badan', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">IMT</label>
                        <input readonly type="number" name="IMT" id="IMT" placeholder="Masukkan IMT" class="form-control" value="<?= $data_kes_lansia->IMT?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tensi Sistolik</label><br>
                        <input type="number" name="tensi_sistolik" placeholder="Ketikkan id_role" class="form-control" value="<?= $data_kes_lansia->tensi_sistolik ?>">
                        <?= form_error('tensi_sistolik', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Tensi Diastolik</label><br>
                        <input type="number" name="tensi_diastolik" placeholder="Ketikkan id_role" class="form-control" value="<?= $data_kes_lansia->tensi_diastolik ?>">
                        <?= form_error('tensi_diastolik', '<div class="text-danger small">', '</div>'); ?>
                    </div>            
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>

    <?php endforeach; ?>
</div>