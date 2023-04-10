<!-- Begin Page Content -->
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Izin Cuti Pegawai
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('ijinpegawai/cutiAdd'); ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Data Izin
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIK/NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Jabatan Fungsional</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data_cuti as $row) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>

                        <td>
                            <?php echo $row->nip ?>
                        </td>
                        <td>
                            <?php echo $row->nama ?>
                        </td>
                        <td>
                            <?php echo $row->jabatan ?>
                        </td>
                        <td>
                            <?php echo $row->tgl_mulai ?>
                        </td>
                        <td>
                            <?php echo $row->tgl_selesai ?>
                        </td>
                        <td>
                            <?php echo $row->keterangan ?>
                        </td>
                        <td>
                            <a href="<?= base_url('user/toggle/') . $row->nip ?>" class="btn btn-circle btn-sm" title=""><i class="fa fa-fw fa-power-off"></i></a>
                            <a href="<?= base_url('user/edit/') . $row->nip ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                            <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('user/delete/') . $row->nip ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="8" class="text-center">Silahkan tambahkan user baru</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>