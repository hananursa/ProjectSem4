<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-database"></i> Form Update Jadwal Kegiatan
    </div>

    <?php foreach ($jadwal_kegiatan as $jadwal_kegiatan) : ?>
        <?php echo form_open_multipart('administrator/jadwal_kegiatan/update_aksi/'.$jadwal_kegiatan->id_jadwal) ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Id Jadwal</label>
                    <input type="text" name="id_jadwal" placeholder="Ketikkan Id Admin" class="form-control" value="<?= $jadwal_kegiatan->id_jadwal ?>">
                    <?= form_error('id_jadwal', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Kegiatan</label>
                    <input type="text" name="kegiatan" placeholder="Masukkan kegiatan" class="form-control" value="<?= $jadwal_kegiatan->kegiatan ?>">
                    <?= form_error('kegiatan', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Waktu</label>
                    <input type="date" name="waktu" placeholder="Waktu" class="form-control" value="<?= $jadwal_kegiatan->waktu ?>">
                    <?= form_error('waktu', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" value="<?= $jadwal_kegiatan->keterangan ?>">
                    <?= form_error('keterangan', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" name="gambar" placeholder="gambar" class="form-control" value="<?= $jadwal_kegiatan->keterangan ?>" required>
                    <?= form_error('gambar', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <?php echo form_close(); ?>

    <?php endforeach; ?>
</div>