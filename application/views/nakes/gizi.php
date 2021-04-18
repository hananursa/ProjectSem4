      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h3 class="m-0 text-primary"> <i class="nav-icon fas fa-user-alt"></i> Data Gizi </h3>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
          <div class="container-fluid">
              <div class="alert alert-secondary" role="alert">
                  <i class="nav-icon fas fa-chart-line"></i> Nakes &nbsp; &nbsp; > &nbsp; &nbsp; <i class="nav-icon fas fa-newspaper"></i> Gizi
              </div>
              <div class="row table-responsive">
                  <div class="col table-responsive">
                      <!-- Tabel -->
                      <div class="card">
  

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('nakes/gizi/tambah_gizi', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Gizi</button>') ?>

  <table id="dataTable" class="table table-responsive table-bordered">
    <tr>
    <th>Id Gizi</th>
    <th>Id Posyandu</th>
    <th>Jenis</th>
      <th>Tanggal</th>
      <th>Keterangan</th>
      <th>Gambar</th>
      <th>Status</th>
      <th colspan="2">AKSI</th>
    </tr>

                  <?= anchor('nakes/gizi/tambah_gizi', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Gizi</button>') ?>
                  <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id Gizi</th>
                          <th>Jenis</th>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                          <th>Gambar</th>
                          <th>Status</th>
                          <th colspan="2">AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($gizi as $gizi) : ?>
                          <tr>
                            <td><?= $gizi->id_gizi; ?></td>
                            <td><?= $gizi->jenis; ?></td>
                            <td><?= $gizi->tanggal; ?></td>
                            <td><?= $gizi->keterangan; ?></td>
                            <td><img class="img-thumbnail" src="<?= base_url('assets/gizi/') ?><?= $gizi->gambar ?>" width="100px" height="100px"></td>
                            <td><?= $gizi->status; ?></td>
                            <td width="20px"><?= anchor('nakes/gizi/update/' . $gizi->id_gizi, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                            <td width="20px"><?= anchor('nakes/gizi/hapus/' . $gizi->id_gizi, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>