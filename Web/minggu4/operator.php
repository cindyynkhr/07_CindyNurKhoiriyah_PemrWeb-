<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: {$hasilTambah}";
echo "<br>";
echo "Hasil Kurang: {$hasilKurang}";
echo "<br>";
echo "Hasil Kali: {$hasilKali}";
echo "<br>";
echo "Hasil Bagi: {$hasilBagi}";
echo "<br>";
echo "Sisa Bagi: {$sisaBagi}";
echo "<br>";
echo "Hasil Pangkat: {$pangkat}";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br><br>";
echo "Hasil $a == $b adalah {$hasilSama}";
echo "<br>";
echo "Hasil $a != $b adalah {$hasilTidakSama}";
echo "<br>";
echo "Hasil $a < $b adalah {$hasilLebihKecil}";
echo "<br>";
echo "Hasil $a > $b adalah {$hasilLebihBesar}";
echo "<br>";
echo "Hasil $a <= $b adalah {$hasilLebihKecilSama}";
echo "<br>";
echo "Hasil $a >= $b adalah {$hasilLebihBesarSama}";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br><br>";
echo "hasil $a && $b adalah {$hasilAnd}";
echo "<br>";
echo "hasil $a || $b adalah {$hasilOr}";
echo "<br>";
echo "hasil !$a adalah {$hasilNotA}";
echo "<br>";
echo "hasil !$b adalah {$hasilNotB}";

$z = $a += $b;
$y = $a -= $b;
$x = $a *= $b;
$w = $a /= $b;
$v = $a %= $b;

echo "<br><br>";
echo "Hasil $a += $b adalah $z";
echo "<br>";
echo "Hasil $a -= $b adalah $y";
echo "<br>";
echo "Hasil $a *= $b adalah $x";
echo "<br>";
echo "Hasil $a /= $b adalah $w";
echo "<br>";
echo "Hasil $a %= $b adalah $v";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br><br>";
echo "Hasil $a === $b adalah {$hasilIdentik}";
echo "<br>";
echo "Hasil $a !== $b adalah {$hasilTidakIdentik}";
echo "<br>";
?>