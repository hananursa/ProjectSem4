<div class="first-widget parallax" id="portfolio">
  <div class="parallax-overlay">
    <div class="container pageTitle">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h2 class="page-title">Posyandu Lansia</h2>
        </div> <!-- /.col-md-6 -->
        <div class="col-md-6 col-sm-6 text-right">
          <span class="page-location">Kader/Gizi</span>
        </div> <!-- /.col-md-6 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div> <!-- /.parallax-overlay -->
</div> <!-- /.pageTitle -->

<div class="container-fluid">
  <div class="table-responsive">
    <table id="dataTable" class="table table-bordered">
      <thead>
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
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($gizi as $gizi) : ?>
          <tr>
            <td><?= $no++; ?></td>
            
            <td><?= $gizi->id_posyandu; ?></td>
            <td><?= $gizi->jenis; ?></td>
            <td><?= $gizi->tanggal; ?></td>
            <td><?= $gizi->keterangan; ?></td>
            <td><img class="img-thumbnail" src="<?= base_url('assets/gizi/') ?><?= $gizi->gambar ?>" width="100px" height="100px"></td>
            <td><?= $gizi->status; ?></td>
            <td width="20px"><?= anchor('kader/gizi/update/' . $gizi->id_gizi, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
            <td width="20px"><?= anchor('kader/gizi/hapus/' . $gizi->id_gizi, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <?= $this->session->flashdata('pesan'); ?>
 
</div>
</div>