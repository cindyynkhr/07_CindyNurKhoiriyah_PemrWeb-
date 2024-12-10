<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;

foreach ($nilaiSiswa as $nilai) {
    $totalNilai += $nilai;
}

$rataRata = $totalNilai/10;
echo "Nilai rata-rata ujian siswa adalah $rataRata";
?>