<div class="first-widget parallax" id="portfolio">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Posyandu Lansia</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Kader4/Gizi</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

  <?= $this->session->flashdata('pesan'); ?>

  <!-- <?= anchor('nakes/gizi/tambah_gizi', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Data Puskesmas</button>') ?>  -->

  <table class="table table-borderd table-hover table-striped">
    <tr>
      <th>Id Gizi</th>
      <th>Jenis</th>
      <th>Tanggal</th>
      <th>Keterangan</th>
      <th>Gambar</th>
      <th>Status</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php
    $no = 1;

    foreach($gizi as $gizi): ?>
    <tr>
      
      <td><?= $gizi->id_gizi; ?></td>
      <td><?= $gizi->jenis; ?></td>
      <td><?= $gizi->tanggal; ?></td>
      <td><?= $gizi->gambar; ?></td>
      <td><?= $gizi->status; ?></td>
      
      <td width="20px"><?= anchor('nakes/gizi/update/'.$gizi->id_gizi, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('nakes/gizi/hapus/'.$gizi->id_gizi, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>