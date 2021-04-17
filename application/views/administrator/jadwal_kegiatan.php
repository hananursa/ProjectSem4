<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0 text-primary"> <i class="nav-icon fas fa-user-alt"></i> Jadwal Kegiatan </h3>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- /.content-header -->
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="alert alert-secondary" role="alert">
        <i class="nav-icon fas fa-chart-line"></i> Admin &nbsp; &nbsp; > &nbsp; &nbsp; <i class="nav-icon fas fa-newspaper"></i> Jadwal Kegiatan
      </div>
      <div class="row">
        <div class="col">
          <!-- Tabel -->
          <div class="card">
            <div class="card-body">
              <?= $this->session->flashdata('pesan'); ?>

              <?= anchor('administrator/jadwal_kegiatan/tambah_jadwal_kegiatan', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Jadwal Kegiatan</button>') ?>

              <div class="table-responsive">
                <table id="dataTable" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Id Jadwal</th>
                      <th>Kegiatan</th>
                      <th>Waktu</th>
                      <th>Keterangan</th>
                      <th>Gambar</th>
                      <th colspan="2">AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($jadwal_kegiatan as $jadwal_kegiatan) : ?>
                      <tr>
                        <td><?= $jadwal_kegiatan->id_jadwal; ?></td>
                        <td><?= $jadwal_kegiatan->kegiatan ?></td>
                        <td><?= $jadwal_kegiatan->waktu ?></td>
                        <td><?= $jadwal_kegiatan->keterangan ?></td>
                        <td><img class="img-thumbnail" src="<?= base_url('assets/gambarjadwal/') ?><?= $jadwal_kegiatan->gambar ?>" width="100px" height="100px"></td>
                        <td width=" 20px"><?= anchor('administrator/jadwal_kegiatan/update/' . $jadwal_kegiatan->id_jadwal, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                        <td width="20px"><?= anchor('administrator/jadwal_kegiatan/hapus/' . $jadwal_kegiatan->id_jadwal, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
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
</div>