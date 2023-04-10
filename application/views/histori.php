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
                $no = 1;
                if ($data) :
                    foreach ($data as $h) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $h['nip']; ?></td>
                            <td><?= $h['nama']; ?></td>
                            <td><?= $h['status_kerja']; ?></td>
                            <td><?= $h['tanggal']; ?></td>
                            <td><?= $h['waktu']; ?></td>
                            <td><?= $h['keterangan']; ?></td>
                            <td><?= $h['lat_long']; ?></td>
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="10" class="text-center">Belum ada histori</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>