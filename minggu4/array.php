<?php
$nilaiSiswa =[85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] += $nilai; 
    }
}
echo "Daftar nilai siswa yang lulus adalah " . implode(', ',$nilaiLulus);

$daftarKaryawan = [
    ['alice',7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawabPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawabPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "<br><br>";
echo "Daftar karyawan dengan pengalaman kerja lebih daari 5 tahun: ". implode(', ',$karyawabPengalamanLimaTahun);

$daftarNilai = [
    'matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ], 
    'fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'fisika';
echo "<br><br>";
echo "Daftar nilai mahasiswa dalam mata kuiah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $Nilai) {
    echo "Nama: {$Nilai[0]}, Nilai: {$Nilai[1]} <br>";
}
?>