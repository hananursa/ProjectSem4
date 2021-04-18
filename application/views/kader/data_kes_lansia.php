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

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>No Kesehatan</th>
          <th>Id posyandu</th>
          <th>No Lansia</th>
          <th>Tanggal Cek</th>
          <th>BB Lansia</th>
          <th>Tinggi Lansia</th>
          <th>IMT</th>
          <th>Tensi Sistolik</th>
          <th>Tensi Diastolik</th>
          <th>Analisis IMT</th>
          <th>Analisis Tensi</th>
          <th colspan="2">AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($data_kes_lansia as $data_kes_lansia) : ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $data_kes_lansia->id_kesehatan; ?></td>
            <td><?= $data_kes_lansia->id_posyandu; ?></td>
            <td><?= $data_kes_lansia->id_lansia; ?></td>
            <td><?= $data_kes_lansia->tanggal_cek; ?></td>
            <td><?= $data_kes_lansia->bb_lansia; ?></td>
            <td><?= $data_kes_lansia->tinggi_badan; ?></td>
            <td><?= round($data_kes_lansia->IMT, 2); ?></td>
            <td><?= $data_kes_lansia->tensi_sistolik; ?></td>
            <td><?= $data_kes_lansia->tensi_diastolik; ?></td>
            <td><?= $data_kes_lansia->analisis_IMT; ?></td>
            <td><?= $data_kes_lansia->analisis_tensi; ?></td>
            <td width="20px"><?= anchor('kader/data_kes_lansia/update/' . $data_kes_lansia->id_kesehatan, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?= anchor('kader/data_kes_lansia/hapus/' . $data_kes_lansia->id_kesehatan, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <?= $this->session->flashdata('pesan'); ?>
  <?= anchor('kader/data_kes_lansia/tambah_data_kes_lansia', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Data </button>') ?>
</div>

</div>