<div class="container pt-5">
    <a href="<?= base_url('level/tambah'); ?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Level</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Level ID</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($getUser as $isi) { ?>
                            <tr>
                                <td><?= $isi['id_level']; ?></td>
                                <td><?= $isi['level']; ?></td>
                                <td>
                                    <a href="<?= base_url('barang/edit/' . $isi['id_level']); ?>" class="btn btn-success">
                                        Edit</a>
                                    <a href="<?= base_url('barang/hapus/' . $isi['id_level']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data level ?')" class="btn btn-danger">
                                        Hapus</a>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>