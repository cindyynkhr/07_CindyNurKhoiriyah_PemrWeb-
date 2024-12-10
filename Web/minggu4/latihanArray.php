<?php
$nilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$jumlahNilai = 0;
$jumlahSiswa = count($nilaiSiswa);

foreach ($nilaiSiswa as $siswa) {
    $jumlahNilai += $siswa[1];
}

$rataRata = $jumlahNilai / $jumlahSiswa;

echo "Rata-rata nilai matematika: $rataRata <br><br>";

echo "Siswa dengan nilai di atas rata-rata:<br>";
foreach ($nilaiSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "{$siswa[0]} mendapatkan nilai {$siswa[1]}<br>";
    }
}
?>