<?php
$poinSeseorang = [100,200,300,400];
$totalPoin = 0;

foreach ($poinSeseorang as $poin) {
    $totalPoin += $poin;
}

echo "Total skor pemain adalah $totalPoin poin <br>";

if ($totalPoin > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? ya <br>";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? tidak <br>";
}

?>