<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-database"></i> Form Update Data Kader
    </div>

    <?php foreach ($data_kader as $data_kader) : ?>

        <form action="<?= base_url('administrator/data_kader/update_aksi') ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                        <label for="">No</label>
                        <input type="hidden" name="id_admin" value="<?= $data_puskesmas->id_admin ?>">
                        <input type="text" name="id_admin" placeholder="Ketikkan Id Admin" class="form-control" value="<?= $data_puskesmas->id_admin ?>">
                        <?= form_error('id_admin', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Admin</label>
                        <input type="hidden" name="nama_admin" value="<?= $data_puskesmas->nama_admin ?>">
                        <input type="text" name="nama_admin" placeholder="Ketikkan Nama Admin" class="form-control" value="<?= $data_puskesmas->nama_admin ?>">
                        <?= form_error('nama_admin', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="hidden" name="username" value="<?= $data_puskesmas->username ?>">
                        <input type="text" name="username" placeholder="Masukkan username" class="form-control" value="<?= $data_puskesmas->username ?>">
                        <?= form_error('username', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Masukkan password" class="form-control" value="<?= $data_puskesmas->password ?>">
                        <?= form_error('password', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Id role</label>
                        <input type="hidden" name="id_role" value="<?= $data_puskesmas->id_role ?>">
                        <input type="text" name="id_role" placeholder="Ketikkan id_role" class="form-control" value="<?= $data_puskesmas->id_role ?>">
                        <?= form_error('id_role', '<div class="text-danger small">', '</div>'); ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>

    <?php endforeach; ?>
</div>