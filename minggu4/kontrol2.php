<?php
$pelangganBeli = 120000;

if ($pelangganBeli > 100000) {
    $harga = ($pelangganBeli - (20 / 100 * $pelangganBeli));
    echo "Anda mendapat diskon 20%, harga yang harus dibayar adalah $harga";
} else {
    echo "Harga yang harus dibayar adalah $pelanganBeli";
}

?>