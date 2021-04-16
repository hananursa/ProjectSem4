<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0 text-primary"> <i class="nav-icon fas fa-user-alt"></i> Data Posyandu </h3>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
          <div class="container-fluid">
              <div class="alert alert-secondary" role="alert">
                  <i class="nav-icon fas fa-chart-line"></i> Admin &nbsp; &nbsp; > &nbsp; &nbsp; <i class="nav-icon fas fa-newspaper"></i> Data Posyandu
              </div>
              <div class="row table-responsive">
                  <div class="col table-responsive">
                      <!-- Tabel -->
                      <div class="card">
  

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/data_posyandu/tambah_data_posyandu', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Data </button>') ?>

  <table id="dataTable" class="table table-responsive table-bordered">
    <tr>
      <th>ID Posyandu</th>
      <th>Nama Posyandu</th>
      <th>Nama Ketua</th>
      <th>Jumlah Kader</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php
    $no = 1;

    foreach($data_posyandu as $data_posyandu): ?>
    <tr>
      <td><?= $data_posyandu->id_posyandu; ?></td>
      <td><?= $data_posyandu->nama_posyandu; ?></td>
      <td><?= $data_posyandu->nama_ketua; ?></td>
      <td><?= $data_posyandu->jumlah_kader; ?></td>
      <td width="20px"><?= anchor('administrator/data_posyandu/update/'.$data_posyandu->id_posyandu, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/data_posyandu/hapus/'.$data_posyandu->id_posyandu, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>