<?php
     function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang-$thn_lahir;
        return $umur;
    }
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.",";
        echo "Perkenalkan, nama saya ".$nama."</br>";
        echo "Senang berkenalan dengan anda</br>";

        echo "Umur saya adalah ".hitungUmur(2005, 2024). " tahun";
    }

    perkenalan("cindy");
    echo"<hr>";

    // $saya = "Cindy";
    // $ucapanSalam = "Selamat Siang";
    // perkenalan($saya, $ucapanSalam);
?>