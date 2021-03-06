<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-database"></i> Form Update Data Gizi
    </div>

    <?php foreach ($gizi as $gizi) : ?>

        <form action="<?= base_url('kader/gizi/update_aksi') ?>" method="post">
            <div class="row">
                <div class="col-md-6">
               
                    <div class="form-group">
                        <label for="">Jenis</label>
                        <input readonly type="text" name="jenis" placeholder="Ketikkan Nama Admin" class="form-control" value="<?= $gizi->jenis ?>">
                        <?= form_error('jenis', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Tangal </label>
                        <input type="hidden" name="tanggal" value="<?= $gizi->tanggal ?>">
                        <input type="text" name="tanggal" placeholder="Masukkan tanggal" class="form-control" value="<?= $gizi->tanggal?>">
                        <?= form_error('tanggal', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="keterangan" name="keterangan" placeholder="Keterangan" class="form-control" value="<?= $gizi->keterangan ?>">
                        <?= form_error('keterangan', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="hidden" name="gambar" value="<?= $gizi->gambar ?>">
                        <input type="text" name="gambar" placeholder="Ketikkan id_role" class="form-control" value="<?= $gizi->gambar ?>">
                        <?= form_error('gambar', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label> <br>
                        <input type="radio" name="status" value="belumdiberikan"> Belum Diberikan <br>
                        <input type="radio" name="status" value="sudahdiberikan"> Sudah Diberikan <br>
                        <?= form_error('status', '<div class="text-danger small">', '</div>'); ?>
                     </div>          
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>

    <?php endforeach; ?>
</div>