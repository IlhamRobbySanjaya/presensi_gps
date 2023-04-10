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
        $masuk = strtotime('00:00:00');
        $istirahat_keluar = strtotime('12:00:00');
        $istirahat_masuk = strtotime('13:00:00');
        $pulang = strtotime('16:00:00');
        if ($this->session->flashdata('message')) { // Jika ada
          echo '<div class="alert alert-danger" role="alert">';
          echo $this->session->flashdata('message');
          echo '</div>'; // Tampilkan pesannya
        }
        ?>
        <?php if ($sekarang >= $masuk && $sekarang < strtotime('12:00:00')) { ?>
          <?php echo validation_errors(); ?>
          <form action="<?= base_url('halamanpresensi/absen_wfh/masuk') ?>" method="post">
            <div class="form-group">
              <label for="exampleFormControlInput1">Latitude, Longitude</label>
              <input type="text" class="form-control" value="<?= set_value('latlong'); ?>" id="latlong" name="latlong">
              <?= form_error('latlong', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info">Add</button>
            </div>
          </form>
        <?php } elseif ($sekarang >= $istirahat_keluar && $sekarang < strtotime('13:00:00')) { ?>
          <form action="<?= base_url('halamanpresensi/absen_wfh/istirahat_keluar') ?>" method="post">
            <div class="form-group">
              <label for="exampleFormControlInput1">Latitude, Longitude</label>
              <input type="text" class="form-control" id="latlong" name="latlong">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info">Add</button>
            </div>
          </form>
        <?php } elseif ($sekarang >= $istirahat_masuk && $sekarang < strtotime('16:00:00')) { ?>
          <form action="<?= base_url('halamanpresensi/absen_wfh/istirahat_masuk') ?>" method="post">
            <div class="form-group">
              <label for="exampleFormControlInput1">Latitude, Longitude</label>
              <input type="text" class="form-control" id="latlong" name="latlong">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info">Add</button>
            </div>
          </form>
        <?php } elseif ($sekarang >= $pulang && $sekarang < strtotime('24:00:00')) { ?>
          <form action="<?= base_url('halamanpresensi/absen_wfh/pulang') ?>" method="post">
            <div class="form-group">
              <label for="exampleFormControlInput1">Latitude, Longitude</label>
              <input type="text" class="form-control" id="latlong" name="latlong">
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