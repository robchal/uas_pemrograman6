<div class="container pt-5">
    <a href="<?= base_url('user/tambah'); ?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data User</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama User</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getUser as $isi) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $isi['nama']; ?></td>
                                <td><?= $isi['level']; ?></td>
                                <td>
                                    <a href="<?= base_url('barang/edit/' . $isi['id_user']); ?>" class="btn btn-success">
                                        Edit</a>
                                    <a href="<?= base_url('barang/hapus/' . $isi['id_user']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')" class="btn btn-danger">
                                        Hapus</a>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>