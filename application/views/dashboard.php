<!-- bootstrap cdn  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- Begin Page Content -->
<?php if (is_admin()) : ?>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Pegawai Pulang </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">14</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Pegawai Istirahat Keluar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">7</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pegawai Istirahat Masuk
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">12</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-home fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pegawai Pulang</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">
        <style>
            #map {
                position: absolute;
                width: 100%;
                height: 400px;
            }
        </style>
        <!-- Pie Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Lokasi Absensi Pegawai</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body-f">
                    <div class="chart-pie">
                        <div id="map"></div>
                    </div>
                </div>
                <br><br><br><br><br>
            </div>
        </div>
    </div>
    </div>

<?php else : ?>
    <div class="row">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="card card-waves mb-4 mt-5">
                <div class="card-body p-5">
                    <div class="row align-items-center justify-content-between">
                        <div class="col">
                            <br><br>
                            <marquee class="text-gray-700">Selamat Datang di Sistem Informasi E-Presensi PSDKU Sidoarjo </marquee>
                            <br><br><br><br>
                            <a class="btn btn-primary p-3" href="<?= base_url("HalamanPresensi") ?>">
                                Absen Sekarang !
                                <i class="ml-1" data-feather="arrow-right"></i>
                            </a>
                        </div>
                        <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5" src="<?= base_url('assets/img/statistics-pana.svg') ?>" /></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <!-- Earnings (Monthly) Card Example -->
        <!-- <div class="card-group">
                            <div class="card shadow mb-4 g-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Presensi Pegawai</h6>
                                </div>
                                <div class="card-group">
                                <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5" src="<?= base_url('assets/img/absen.png') ?>" /></div>
                                <div class="card-body">
                                    <br><br><br><br>
                                <a class="btn btn-primary p-3" href="<?= base_url("Presensi Pegawai") ?>">
                                     Mulai Absensi
                                <i class="ml-1" data-feather="arrow-right"></i>
                                </a>
                                </div>
                            </div>
                        </div>
                            <div class="card shadow mb-4 ml-2">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Ajukan Cuti Pegawai</h6>
                                </div>
                                <div class="card-group">
                                <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5" src="<?= base_url('assets/img/izin.png') ?>" /></div>
                                <div class="card-body">
                                <br><br><br>
                                <br><a class="btn btn-primary p-3" href="<?= base_url("IjinPegawai") ?>">
                                         Ajukan Cuti
                                <i class="ml-1" data-feather="arrow-right"></i>
                                </a> 
                                </div>
                            </div>
                        </div> -->

    <?php endif; ?>