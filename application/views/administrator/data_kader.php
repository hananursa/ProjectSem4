<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0 text-primary"> <i class="nav-icon fas fa-user-alt"></i> Data Kader </h3>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
          <div class="container-fluid">
              <div class="alert alert-secondary" role="alert">
                  <i class="nav-icon fas fa-chart-line"></i> Admin &nbsp; &nbsp; > &nbsp; &nbsp; <i class="nav-icon fas fa-newspaper"></i> Data Kader
              </div>
              <div class="row table-responsive">
                  <div class="col table-responsive">
                      <!-- Tabel -->
                      <div class="card">
  

  <?= $this->session->flashdata('pesan'); ?>
  <?= anchor('administrator/data_kader/tambah_data_kader_aksi', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Data </button>') ?>

  <table id="dataTable" class="table table-responsive table-bordered">
    <tr>
      <th>ID Kader</th>
      <th>ID Posyandu</th>
      <th>Nama Kader</th>
      <th>Username</th>
      <th>Pass Kader</th>
      <th>No HP</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php
    

    foreach($data_kader as $data_kader): ?>
    <tr>
      <td><?= $data_kader->id_kader; ?></td>
      <td><?= $data_kader->id_posyandu; ?></td>
      <td><?= $data_kader->nama_kader; ?></td>
      <td><?= $data_kader->username_kader; ?></td>
      <td><?= $data_kader->pass_kader; ?></td>
      <td><?= $data_kader->no_hp; ?></td>
      <td width="20px"><?= anchor('administrator/data_kader/update/'.$data_kader->id_kader, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/data_kader/hapus/'.$data_kader->id_kader, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>