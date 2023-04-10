<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Absen Harian</h4>
            </div>
            <div class="card-body">
                <table class="table w-100">
                    <thead>
                        <script>
                            $(function() {
                                $("#butdisable").click(function() {
                                    $("#butdisable").attr("disabled", "disabled");
                                    setTimeout(function() {
                                        $("#butdisable").removeAttr("disabled");
                                    }, 100000);
                                });
                            });
                        </script>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Absen</th>
                    </thead>
                    <tbody>
                        <?php date_default_timezone_set('Asia/Jakarta');
                        $tgl = date('Y-m-d');
                        $sekarang = strtotime(date('H:i:s'));
                        $masuk = strtotime('09:00:00');
                        $pulang = strtotime('13:00:00');
                        $cekTanggalAbsensi = $absensi['tanggal']; ?>
                        <tr>
                            <?php if (is_weekend()) : ?>
                                <td class="bg-light text-danger" colspan="4">Hari ini libur. Tidak Perlu absen</td>
                            <?php else : ?>
                                <td><i class="fa fa-3x fa-<?= ($detail_absensi < 2) ? "warning text-warning" : "check-circle-o text-success" ?>"></i></td>
                                <td id="btndisable"><?= tgl_hari(date('d-m-Y')) ?></td>
                                <?php if ($sekarang >= $masuk && $sekarang < strtotime('12:00:00')) {
                                    if ($cekTanggalAbsensi < $tgl) { ?>
                                        <td>
                                            <a href="<?= base_url('HalamanPresensi/map_wfo') ?>" id="butdisable" class="btn btn-primary btn-sm btn-fill" <?= ($detail_absensi == 1) ? 'disabled style="cursor:not-allowed"' : '' ?>>Masuk</a>
                                        </td>
                                    <?php } elseif ($cekTanggalAbsensi = $sekarang && $absensi['keterangan'] == "Masuk") { ?>
                                        <td>
                                            <button class="btn btn-primary btn-sm btn-fill" disabled>Masuk</button>
                                        </td>
                                    <?php }
                                } elseif ($sekarang >= $pulang && $sekarang < strtotime('15:00:00')) {
                                    if ($cekTanggalAbsensi = $sekarang && $absensi['keterangan'] == "Pulang") { ?>
                                        <td>
                                            <a href="<?= base_url('HalamanPresensi/map_wfo') ?>" id="butdisable" class="btn btn-danger btn-sm btn-fill" <?= ($detail_absensi == 2) ? 'disabled style="cursor:not-allowed"' : '' ?>>Pulang</a>
                                        </td>
                                    <?php } else { ?>
                                        <td>
                                            <button class="btn btn-primary btn-sm btn-fill" disabled>Pulang</button>
                                        </td>
                                <?php }
                                } ?>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>