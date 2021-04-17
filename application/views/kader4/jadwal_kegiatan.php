<div class="first-widget parallax" id="portfolio">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Posyandu Lansia</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Kader4/Kegiatan</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

  <?= $this->session->flashdata('pesan'); ?>

  <!-- <?= anchor('kader4/jadwal_kegiatan/tambah_jadwal_kegiatan', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Data Jadwal Kegiatan</button>') ?> -->

  <table class="table table-borderd table-hover table-striped">
    <tr>
      <th>Id Jadwal</th>
      <th>Id Lansia</th>
      <th>Kegiatan</th>
      <th>Waktu</th>
      <th>Keterangan</th>
      <th>Gambar</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php
    

    foreach($jadwal_kegiatan as $jadwal_kegiatan): ?>
    <tr>
     
      <td><?= $jadwal_kegiatan->id_jadwal; ?></td>
      <td><?= $jadwal_kegiatan->id_lansia?></td>
      <td><?= $jadwal_kegiatan->kegiatan ?></td>
      <td><?= $jadwal_kegiatan->waktu ?></td>
      <td><?= $jadwal_kegiatan->keterangan ?></td>
      <td><?= $jadwal_kegiatan->gambar ?></td>

      <td width="20px"><?= anchor('kader4/jadwal_kegiatan/update/'.$jadwal_kegiatan->id_jadwal, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('kader4/jadwal_kegiatan/hapus/'.$jadwal_kegiatan->id_jadwal, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>