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

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th>ID Lansia</th>
          <th>ID POSYANDU</th>
          <th>NAMA</th>
          <th>TANGGAL LAHIR</th>
          <th>UMUR</th>
          <th>JENIS KELAMIN</th>
          <th>ALAMAT</th>
          <th colspan="2">AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($data_lansia as $data_lansia) : ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $data_lansia->id_posyandu; ?></td>
            <td><?= $data_lansia->nama_lansia; ?></td>
            <td><?= $data_lansia->tanggal_lahir; ?></td>
            <td><?= $data_lansia->umur; ?></td>
            <td><?= $data_lansia->jenis_kelamin; ?></td>
            <td><?= $data_lansia->alamat; ?></td>
            <td width="20px"><?= anchor('kader/data_lansia/update/' . $data_lansia->id_lansia, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>

            <td width="20px"><?= anchor('kader/data_lansia/hapus/' . $data_lansia->id_lansia, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <?= $this->session->flashdata('pesan'); ?>
  <?= anchor('kader/data_lansia/tambah_data_lansia', '<button class="btn btn-primary btn-sm"><i class="fa fa-plus fa-sm"></i> Tambah Data</button>') ?>
</div>



</div>