<?php
    // function tampilkanHaloDunia(){
    //     echo "Halo Dunia! <br>";

    //     tampilkanHaloDunia();
    //     break;
    // }

    // tampilkanHaloDunia();

    function tampilkanAngka (int $jumlah, int $indeks = 1){
        echo "Perulangan ke-{$indeks} <br>";

        //lakukan rekursif dengan jumlah tertentu
        if ($indeks < $jumlah) {
            tampilkanAngka($jumlah, $indeks+1);
        }
    }
    tampilkanAngka(20);
?>