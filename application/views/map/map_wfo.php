<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Membuat Peta</title>
    <style>
        /* ukuran peta */
        #mapid {
            height: 100%;
        }

        .jumbotron {
            height: 100%;
            border-radius: 0;
        }

        body {
            background-color: #ebe7e1;
        }
    </style>


</head>

<body>
    <div class="row mb-3">
        <!-- class row digunakan sebelum membuat column  -->
        <div class="col-4">
            <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
            <div class="jumbotron">
                <!-- untuk membuat semacam container berwarna abu -->
                <h1>Add Location</h1>
                <hr>
                <?php date_default_timezone_set('Asia/Jakarta');
                $tgl = date('Y-m-d');
                $sekarang = strtotime(date('H:i:s'));
                $masuk = strtotime('08:00:00');
                $pulang = strtotime('12:00:00'); ?>
                <?php if ($sekarang >= $masuk && $sekarang < strtotime('12:00:00')) { ?>
                    <form action="<?= base_url('halamanpresensi/absen_wfo/masuk') ?>" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Latitude, Longitude</label>
                            <input type="text" class="form-control" id="latlong" name="latlong" disabled>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Add</button>
                        </div>
                    </form>
                <?php } elseif ($sekarang >= $pulang && $sekarang < strtotime('15:00:00')) { ?>
                    <form action="<?= base_url('halamanpresensi/absen_wfo/pulang') ?>" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Latitude, Longitude</label>
                            <input type="text" class="form-control" id="latlong" name="latlong" disabled>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Add</button>
                        </div>
                    </form>
                <?php } ?>
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
        <div class="col-8">
            <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
            <!-- peta akan ditampilkan dengan id = mapid -->
            <div id="mapid"></div>
        </div>
    </div>


</body>

</html>