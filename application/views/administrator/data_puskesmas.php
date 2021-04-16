<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0 text-primary"> <i class="nav-icon fas fa-user-alt"></i> Data Puskesmas </h3>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
          <div class="container-fluid">
              <div class="alert alert-secondary" role="alert">
                  <i class="nav-icon fas fa-chart-line"></i> Admin &nbsp; &nbsp; > &nbsp; &nbsp; <i class="nav-icon fas fa-newspaper"></i> Data Puskesmas
              </div>
              <div class="row table-responsive">
                  <div class="col table-responsive">
                      <!-- Tabel -->
                      <div class="card">
  

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/data_puskesmas/tambah_data_puskesmas', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Data Puskesmas</button>') ?>

  <table id="dataTable" class="table table-responsive table-bordered">
    <tr>
      <th>NO</th>
      <th>Nama Admin</th>
      <th>Username</th>
      <th>Password</th>
      <th>Id_role</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php
    $no = 1;

    foreach($data_puskesmas as $data_puskesmas): ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $data_puskesmas->nama_admin; ?></td>
      <td><?= $data_puskesmas->username; ?></td>
      <td><?= $data_puskesmas->password; ?></td>
      <td><?= $data_puskesmas->id_role; ?></td>
      <td width="20px"><?= anchor('administrator/data_puskesmas/update/'.$data_puskesmas->id_admin, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrato/data_puskesmas/hapus/'.$data_puskesmas->id_admin, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>