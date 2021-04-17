<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0 text-primary"> <i class="nav-icon fas fa-user-alt"></i> Data Kesehatan Lansia </h3>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
          <div class="container-fluid">
              <div class="alert alert-secondary" role="alert">
                  <i class="nav-icon fas fa-chart-line"></i> Admin &nbsp; &nbsp; > &nbsp; &nbsp; <i class="nav-icon fas fa-newspaper"></i> Data Kesehatan Lansia
              </div>
              <div class="row table-responsive">
                  <div class="col table-responsive">
                      <!-- Tabel -->
                      <div class="card">
  

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('nakes/data_kes_lansia/tambah_data_kes_lansia', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Data Keseatan Lansia</button>') ?>

  <table id="dataTable" class="table table-responsive table-bordered">
    <tr>
      <th>No Kesehatan</th>
      <th>Id Posyandu</th>
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

    <?php
    

    foreach($data_kes_lansia as $data_kes_lansia): ?>
    <tr>
      <td><?= $data_kes_lansia->id_kesehatan; ?></td>
      <td><?= $data_kes_lansia->id_posyandu; ?></td>
      <td><?= $data_kes_lansia->id_lansia; ?></td>
      <td><?= $data_kes_lansia->tanggal_cek; ?></td>
      <td><?= $data_kes_lansia->bb_lansia; ?></td>
      <td><?= $data_kes_lansia->tinggi_badan; ?></td>
      <td><?= $data_kes_lansia->IMT; ?></td>
      <td><?= $data_kes_lansia->tensi_sistolik; ?></td>
      <td><?= $data_kes_lansia->tensi_diastolik; ?></td>
      <td><?= $data_kes_lansia->analisis_IMT; ?></td>
      <td><?= $data_kes_lansia->analisis_tensi; ?></td>
      <td width="20px"><?= anchor('nakes/data_kes_lansia/update/'.$data_kes_lansia->id_kesehatan, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('nakes/data_kes_lansia/hapus/'.$data_kes_lansia->id_kesehatan, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>