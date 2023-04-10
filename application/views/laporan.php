<!-- Begin Page Content -->
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Laporan Presensi Pegawai
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('user/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-print"></i>
                    </span>
                    <span class="text">
                        Cetak Laporan
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
                        <th>NIP</th>
                        <th>Nama Lengkap</th>
                        <th>Bagian</th>
                        <th>Tanggal</th>
                        <th>Jam Masuk</th>
                        <th>Jam Istirahat Keluar</th>
                        <th>Jam Istirahat Masuk</th>
                        <th>Jam Pulang</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $count = 0;
                foreach($data_absensi as $row){  
                    $count = $count = 1;
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
                            <?php echo $row->bagian ?>
                        </td>
                        <td>
                            <?php echo $row->tanggal ?>
                        </td>
                        <td>
                            <?php echo $row->keterangan ?>
                        </td>
                        <td>
                            <a href="<?php echo site_url('user/edit/'.$row->nip) ?>"
                            class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                            <a onclick="deleteConfirm('<?php echo site_url('user/delete/'.$row->nip) ?>')"
                            href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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