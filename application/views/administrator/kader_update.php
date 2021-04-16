<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-database"></i> Form Update Data Puskesmas
    </div>

    <?php foreach ($data_puskesmas as $data_puskesmas) : ?>

        <form action="<?= base_url('administrator/data_puskesmas/update_aksi') ?>" method="post">
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">ID Kader</label>
                    <input type="text" name="id_kader" placeholder="Ketikkan ID Kader" class="form-control" value="<?= $data_kader->id_kader ?>">
                    <?= form_error('id_kader', '<div class="text-danger small">', '</div>'); ?>
                </div>
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
                    <input type="text" name="username_kader" placeholder="Masukkan username" class="form-control" value="<?= $data_kader->username ?>">
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
                <div class="form-group">
                    <label for="">Id role</label>
                    <input type="text" name="level" placeholder="Masukkan level" class="form-control" value="<?= $data_kader->level ?>">
                    <?= form_error('level', '<div class="text-danger small">', '</div>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </form>

    <?php endforeach; ?>
</div>