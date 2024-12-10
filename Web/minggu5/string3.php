<?php
// $pesan = "Saya arek malang";
// echo strrev($pesan)."<br>";

$pesan1 = "Saya Arek Malang";
$pesanPerKata = explode(" ",$pesan1);
$pesanPerKata = array_map(fn($pesan1)=>strrev($pesan1),$pesanPerKata);
$pesan = implode(" ", $pesanPerKata);

echo $pesan."<br>";
?>