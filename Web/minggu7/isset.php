<?php
    $umur;
    if (isset($umur)&&$umur>=18) {
        echo "Anda sudah dewasa.";
    } else {
        echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
    }
    
    echo "<br><br><br>";

    $data = array("nama" => "Cindy", "usia" => 19);
    if (isset($data["nama"])) {
        echo "Nama: ".$data["nama"];
    } else {
        echo "Variabel 'nama' tidak ditemukan di dalam array";
    } 

    // Contoh menambahkan baris untuk usia
    echo "<br>";
    if (isset($data["usia"])) { 
        echo "Usia: " . $data["usia"] . "<br>"; // Menambahkan <br> untuk usia
    } else { 
        echo "Variabel 'usia' tidak ditemukan di dalam array" . "<br>"; 
    } 
?>