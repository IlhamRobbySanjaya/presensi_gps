<?= $this->session->flashdata('pesan'); ?>
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
                                $("").click(function() {
                                    $("").attr("disabled", "disabled");
                                    setTimeout(function() {
                                        $("").removeAttr("disabled");
                                    }, 10000);
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
                        $masuk = strtotime('00:00:00');
                        $istirahat_keluar = strtotime('12:00:00');
                        $istirahat_masuk = strtotime('13:00:00');
                        $pulang = strtotime('16:00:00');
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
                                            <a href="<?= base_url('HalamanPresensi/map_wfh') ?>" class="btn btn-primary btn-sm btn-fill" <?= ($detail_absensi == 1) ? 'disabled style="cursor:not-allowed"' : '' ?>>Masuk</a>
                                        </td>
                                    <?php } elseif ($cekTanggalAbsensi = $sekarang && $absensi['keterangan'] == "Masuk") { ?>
                                        <td>
                                            <button class="btn btn-primary btn-sm btn-fill" disabled>Masuk</button>
                                        </td>
                                    <?php }
                                } elseif ($sekarang >= $istirahat_keluar && $sekarang < strtotime('13:00:00')) {
                                    if ($cekTanggalAbsensi = $sekarang && $absensi['keterangan'] == "Istirahat_keluar") { ?>
                                        <td>
                                            <button class="btn btn-primary btn-sm btn-fill" disabled>Istirahat Keluar</button>
                                        </td>
                                    <?php } else { ?>
                                        <td>
                                            <a href="<?= base_url('HalamanPresensi/map_wfh') ?>" class="btn btn-info btn-sm btn-fill" <?= ($detail_absensi == 2) ? 'disabled style="cursor:not-allowed"' : '' ?>>Istirahat Keluar</a>
                                        </td>
                                    <?php }
                                } elseif ($sekarang >= $istirahat_masuk && $sekarang < strtotime('16:00:00')) {
                                    if ($cekTanggalAbsensi = $sekarang && $absensi['keterangan'] == "Istirahat_masuk") { ?>
                                        <td>
                                            <button class="btn btn-primary btn-sm btn-fill" disabled>Istirahat Masuk</button>
                                        </td>
                                    <?php } else { ?>
                                        <td>
                                            <a href="<?= base_url('HalamanPresensi/map_wfh') ?>" class="btn btn-success btn-sm btn-fill" <?= ($detail_absensi == 3) ? 'disabled style="cursor:not-allowed"' : '' ?>>Istirahat Masuk</a>
                                        </td>
                                    <?php }
                                } elseif ($sekarang >= $pulang && $sekarang < strtotime('24:00:00')) {
                                    if ($cekTanggalAbsensi = $sekarang && $absensi['keterangan'] == "Pulang") { ?>
                                        <td>
                                            <button class="btn btn-primary btn-sm btn-fill" disabled>Pulang</button>
                                        </td>
                                    <?php } else { ?>
                                        <td>
                                            <a href="<?= base_url('HalamanPresensi/map_wfh') ?>" class="btn btn-danger btn-sm btn-fill" <?= ($detail_absensi == 4) ? 'disabled style="cursor:not-allowed"' : '' ?>>Pulang</a>
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