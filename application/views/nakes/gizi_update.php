<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-database"></i> Form Update Data Gizi
    </div>

    <?php foreach ($gizi as $gizi) : ?>
        <?php echo form_open_multipart('nakes/gizi/update_aksi/' . $gizi->id_gizi) ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Id Gizi</label>
                    <input type="hidden" name="id_gizi" value="<?= $gizi->id_gizi ?>">
                    <input type="text" name="id_gizi" placeholder="Ketikkan Id Gizi" class="form-control" value="<?= $gizi->id_gizi ?>" readonly>
                    <?= form_error('id_gizi', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Jenis</label><br>
                    <input type="radio" name="jenis" value="makanan" <?php if ($gizi->jenis == 'makanan') : ?>checked<?php endif; ?>> Makanan <br>
                    <input type="radio" name="jenis" value="vitamin" <?php if ($gizi->jenis == 'vitamin') : ?>checked<?php endif; ?>> Vitamin <br>
                    <?= form_error('jenis', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Tangal </label>
                    <input type="hidden" name="tanggal" value="<?= $gizi->tanggal ?>">
                    <input type="text" name="tanggal" placeholder="Masukkan tanggal" class="form-control" value="<?= $gizi->tanggal ?>">
                    <?= form_error('tanggal', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="keterangan" name="keterangan" placeholder="Keterangan" class="form-control" value="<?= $gizi->keterangan ?>">
                    <?= form_error('keterangan', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <div class="form-group">
                        <label for="">Id Gizi</label>
                        <input type="hidden" name="id_gizi" value="<?= $gizi->id_gizi ?>">
                        <input type="text" name="id_gizi" placeholder="Ketikkan Id Gizi" class="form-control" value="<?= $gizi->id_gizi ?>">
                        <?= form_error('id_gizi', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Id Posyandu</label>
                        <input type="hidden" name="id_posyandu" value="<?= $gizi->id_posyandu ?>">
                        <input type="text" name="id_posyandu" placeholder="Ketikkan Id Posyandu" class="form-control" value="<?= $gizi->id_gizi ?>">
                        <?= form_error('id_posyandu', '<div class="text-danger small">', '</div>'); ?>
                    </div>
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
                <div class="form-group">
                    <label for="">Status</label> <br>
                    <input type="radio" name="status" value="belumdiberikan" <?php if ($gizi->status == 'belumdiberikan') : ?>checked<?php endif; ?>> Belum Diberikan <br>
                    <input type="radio" name="status" value="sudahdiberikan" <?php if ($gizi->status == 'sudahdiberikan') : ?>checked<?php endif; ?>> Sudah Diberikan <br>
                    <?= form_error('status', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <?php echo form_close(); ?>
    <?php endforeach; ?>
</div>