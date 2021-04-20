<div class="first-widget parallax" id="portfolio">
  <div class="parallax-overlay">
    <div class="container pageTitle">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h2 class="page-title">Posyandu Lansia</h2>
        </div> <!-- /.col-md-6 -->
        <div class="col-md-6 col-sm-6 text-right">
          <span class="page-location">Kader/Kegiatan</span>
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
          <th>Id Jadwal</th>
          <th>Kegiatan</th>
          <th>Waktu</th>
          <th>Keterangan</th>
          <th>Gambar</th>
          <th colspan="2">AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1;
        foreach ($jadwal_kegiatan as $jadwal_kegiatan) : ?>
          <tr>
          <td><?= $no++; ?></td>
            
            <td><?= $jadwal_kegiatan->kegiatan ?></td>
            <td><?= $jadwal_kegiatan->waktu ?></td>
            <td><?= $jadwal_kegiatan->keterangan ?></td>
            <td><img class="img-thumbnail" src="<?= base_url('assets/gambarjadwal/') ?><?= $jadwal_kegiatan->gambar ?>" width="100px" height="100px"></td>
            <td width="20px"><?= anchor('kader/jadwal_kegiatan/update/' . $jadwal_kegiatan->id_jadwal, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?= anchor('kader/jadwal_kegiatan/hapus/' . $jadwal_kegiatan->id_jadwal, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <?= $this->session->flashdata('pesan'); ?>

</div>


</div>