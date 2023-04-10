<a class="btn btn-primary" href="<?= base_url('detail_user/pdf') ?>"><i class="fa fa-print"></i> Export PDF</a>
<!-- Begin Page Content -->
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Pegawai
                </h4>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Jabatan Fungsional</th>
                    <th>E-mail</th>
                    <th>Alamat</th>
                    <th>Nomor telpon</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($data_user as $row) {
                    $count = $count + 1;
                ?>
                    <tr>
                        <td>
                            <?php echo $count ?>
                        </td>
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
                            <?php echo $row->email ?>
                        </td>
                        <td>
                            <?php echo $row->alamat ?>
                        </td>
                        <td>
                            <?php echo $row->no_telp ?>
                        </td>
                        <td>
                            <img src="<?= base_url(); ?>assets/img/avatar/<?= $row->foto; ?>" width="50" height="50">
                        </td>
                        <td>
                            <a href="<?php echo base_url('detail_user/formEdit/') . $row->nip ?>" class="btn btn-circle btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo site_url('detail_user/aksiDelete/') . $row->nip ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="btn btn-circle btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>