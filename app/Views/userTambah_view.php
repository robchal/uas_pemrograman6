<div class="container p-5">
    <a href="<?= base_url('user'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data User</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('user/add'); ?>">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Level</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="id_level">

                        <?php
                        foreach ($getLevel as $isi) { ?>
                            <option value=<?= $isi['id_level']  ?>> <?= $isi['level'] ?> </option>
                        <?php
                        } ?>

                    </select>
                </div>

                <button class="btn btn-success">Tambah Data</button>
            </form>

        </div>
    </div>
</div>