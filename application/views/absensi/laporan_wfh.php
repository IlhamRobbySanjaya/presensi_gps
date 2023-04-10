<a class="btn btn-primary" href="<?= base_url('report_wf/pdf') ?>"><i class="fa fa-print"></i> Export PDF</a>
<br><br>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Histori
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
                    <th>Status Kerja</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                    <th>lokasi</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($data_absen as $row) {
                    $count = $count + 1;
                ?>
                    <tr>
                        <td>
                            <?php echo $count ?>
                        </td>
                        <td>
                            <?php echo $row->nama ?>
                        </td>
                        <td>
                            <?php echo $row->status_kerja ?>
                        </td>
                        <td>
                            <?php echo $row->tanggal ?>
                        </td>
                        <td>
                            <?php echo $row->waktu ?>
                        </td>
                        <td>
                            <?php echo $row->keterangan ?>
                        </td>
                        <td>
                            <?php echo $row->nip ?>
                        </td>
                        <td>
                            <?php echo $row->lat_long ?>
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