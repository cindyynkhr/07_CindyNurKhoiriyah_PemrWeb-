<?php
    $nama = @$_GET['nama']; //tanda @a agar tidak ada peringatan error
    //ketika key-nya kosong
    $usia = @$_GET['usia'];

    echo "Hallo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>