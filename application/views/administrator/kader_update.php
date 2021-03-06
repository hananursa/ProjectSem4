<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-database"></i> Form Update Data Puskesmas
    </div>

    <?php foreach ($data_kader as $data_kader) : ?>
        <?php echo form_open_multipart('administrator/data_kader/update_aksi/'.$data_kader->id_kader) ?>
            <div class="row">
            <div class="col-md-6">
               
                <div class="form-group">
                    <label for="">Id Posyandu</label>
                    <input type="text" name="id_posyandu" placeholder="Ketikkan Id posyandu" class="form-control" value="<?= $data_kader->id_posyandu ?>">
                    <?= form_error('id_posyandu', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Nama Kader</label>
                    <input type="text" name="nama_kader" placeholder="Masukkan Nama Kader" class="form-control" value="<?= $data_kader->nama_kader ?>">
                    <?= form_error('nama_kader', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username_kader" placeholder="Masukkan username" class="form-control" value="<?= $data_kader->username_kader ?>">
                    <?= form_error('username_kader', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">No HP</label>
                    <input type="text" name="no_hp" placeholder="Masukkan no hp" class="form-control" value="<?= $data_kader->no_hp ?>">
                    <?= form_error('no_hp', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="pass_kader" placeholder="Masukkan password" class="form-control" value="<?= $data_kader->pass_kader ?>">
                    <?= form_error('pass_kader', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </form>
        <?php echo form_close(); ?>
    <?php endforeach; ?>
</div>