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

<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-database"></i> Form Update Data Gizi
</div>

    <?php foreach ($data_kes_lansia as $data_kes_lansia) : ?>

        <form action="<?= base_url('nakes/data_kes_lansia/update_aksi') ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                        <label for="">Id Kesehatan</label>   <br>                     
                        <input type="text" name="id_kesehatan" placeholder="Ketikkan Id Admin" class="form-control" value="<?= $data_kes_lansia->id_kesehatan ?>">
                        <?= form_error('id_kesehatan', '<div class="text-danger small">', '</div>'); ?>
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
                    <div class="form-group">
                    <label for="">Analisis IMT</label> <br>
                        <input type="radio" name="analisis_IMT" value="kurus"> Kurus <br>
                        <input type="radio" name="analisis_IMT" value="normal"> Normal<br>
                        <input type="radio" name="analisis_IMT" value="gemuk"> Gemuk<br>
                        <input type="radio" name="analisis_IMT" value="obesitas"> Obesitas<br>
                    <?= form_error('analisis_IMT', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                    <label for="">Analisis Tensi</label> <br>
                        <input type="radio" name="analisis_tensi" value="hipotensi"> Hipotensi <br>
                        <input type="radio" name="analisis_tensi" value="normal"> Normal<br>
                        <input type="radio" name="analisis_tensi" value="hipertensi"> Hipertensi<br>
                    <?= form_error('analisis_tensi', '<div class="text-danger small">', '</div>'); ?>
                    </div>        
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>

    <?php endforeach; ?>
</div>