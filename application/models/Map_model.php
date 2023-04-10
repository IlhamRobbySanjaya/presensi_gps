<?php
    $query = mysqli_query($con,"select * from data_location");
    while ($data = mysqli_fetch_array($query))
    {
        $nama = $data['desc'];
        $lat = $data['lat'];
        $lon = $data['lon'];
        
        echo ("addMarker($lat, $lon, '<b>$nama</b>');\n");                        
    }
