<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data User
                </h4>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th width="30">No.</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>nip</th>
                    <th>Email</th>
                    <th>No. telp</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($users) :
                    foreach ($users as $user) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td>
                                <img width="30" src="<?= base_url() ?>assets/img/avatar/<?= $user['foto'] ?>" alt="<?= $user['nama']; ?>" class="img-thumbnail rounded-circle">
                            </td>
                            <td><?= $user['nama']; ?></td>
                            <td><?= $user['nip']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td><?= $user['no_telp']; ?></td>
                            <td><?= $user['role']; ?></td>
                            <td>
                                <a href="<?= base_url('user/toggle/') . $user['id_user'] ?>" class="btn btn-circle btn-sm <?= $user['is_active'] ? 'btn-success' : 'btn-secondary' ?>" title="<?= $user['is_active'] ? 'User Aktif!' : 'User Nonaktif!' ?>"><i class="fa fa-fw fa-power-off"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan user baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>