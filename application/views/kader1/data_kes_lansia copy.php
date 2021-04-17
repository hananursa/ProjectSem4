<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-database"></i> Data Kesehatan Lansia
  </div>

  <?= $this->session->flashdata('pesan'); ?>
  <div></div>

  <?= anchor('kader1/data_kes_lansia/tambah_data_kes_lansia', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Data Kesehatan Lansia</button>') ?>

  <table class="table table-borderd table-hover table-striped">
    <tr>
      <th>No Kesehatan</th>
      <th>No Lansia</th>
      <th>Tanggal Cek</th>
      <th>BB Lansia</th>
      <th>Tensi Sistolik</th>
      <th>Tensi Diastolik</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php
    $no = 1;

    foreach($data_kes_lansia as $data_kes_lansia): ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $data_kes_lansia->id_kesehatan; ?></td>
      <td><?= $data_kes_lansia->id_lansia; ?></td>
      <td><?= $data_kes_lansia->tanggal_cek; ?></td>
      <td><?= $data_kes_lansia->bb_lansia; ?></td>
      <td><?= $data_kes_lansia->tensi_sistolik; ?></td>
      <td><?= $data_kes_lansia->tensi_diastolik; ?></td>
      <td width="20px"><?= anchor('kader1/data_kes_lansia/update/'.$data_kes_lansia->id_kesehatan, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('kader1/data_kes_lansia/hapus/'.$data_kes_lansia->id_kesehatan, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>