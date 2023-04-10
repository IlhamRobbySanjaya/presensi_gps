<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Daftar Pegawai</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
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
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="<?= base_url('halamanpresensi/check_absen_wfh/') ?>" class="btn btn-primary btn-sm"><i class="fa fa-calendar"></i> WFH</a>
                                <a href="<?= base_url('halamanpresensi/check_Absen_wfo/') ?>" class="btn btn-primary btn-sm"><i class="fa fa-calendar"></i> WFO</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>