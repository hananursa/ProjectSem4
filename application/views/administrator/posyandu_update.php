<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-database"></i> Form Update Data Posyandu
    </div>

    <?php foreach ($data_posyandu as $data_posyandu) : ?>

        <form action="<?= base_url('administrator/data_posyandu/update_aksi') ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama Posyandu</label>
                        <input type="text" name="nama_posyandu" placeholder="Ketikkan nama_posyandu" class="form-control"value="<?= $data_posyandu->nama_posyandu ?>">
                        <?= form_error('nama_posyandu', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Ketua</label>
                        <input type="text" name="nama_ketua" placeholder="Masukkan nama ketua" class="form-control" value="<?= $data_posyandu->nama_ketua ?>">
                        <?= form_error('nama_ketua', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah kader</label>
                        <input type="number" name="jumlah_kader" placeholder="Ketikkan jumlah kader" class="form-control" value="<?= $data_posyandu->jumlah_kader ?>">
                        <?= form_error('jumlah_kader', '<div class="text-danger small">', '</div>'); ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>

    <?php endforeach; ?>
</div>