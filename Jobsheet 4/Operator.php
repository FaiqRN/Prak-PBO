<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a * $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasillebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilor = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo ("Hasil Tambah={$hasilTambah}");
echo "<br>";
echo ("Hasil Kurang={$hasilKurang}");
echo "<br>";
echo ("Hasil Kali={$hasilKali}");
echo "<br>";
echo ("Hasil Bagi={$hasilBagi}");
echo "<br>";
echo ("Hasil sisa Bagi={$hasilTambah}");
echo "<br>";
echo ("Hasil Pangkat={$pangkat}");
echo "<br>";
echo "<br>";
echo ("hasil Sama={$hasilSama}");
echo "<br>";
echo ("hasil Tidak Sama={$hasilTidakSama}");
echo "<br>";
echo ("hasil Lebih Kecil={$hasilLebihKecil}");
echo "<br>";
echo ("hasil Lebih besar={$hasilLebihBesar}");
echo "<br>";
echo ("hasil Lebih kecil Sama={$hasillebihKecilSama}");
echo "<br>";
echo ("hasil Lebih besar Sama={$hasilLebihBesarSama}");
echo "<br>";
echo "<br>";
echo ("hasil AND={$hasilAnd}");
echo "<br>";
echo ("hasil LOR={$hasilor}");
echo "<br>";
echo ("hasil NOT A={$hasilNotA}");
echo "<br>";
echo ("hasil NOT B={$hasilNotB}");
echo "<br>";
echo "<br>";
$a += $b;
echo ("Hasil A1={$a}");
echo "<br>";
$a -= $b;
echo ("Hasil A2={$a}");
echo "<br>";
$a *= $b;
echo ("Hasil A3={$a}");
echo "<br>";
$a /= $b;
echo ("Hasil A4={$a}");
echo "<br>";
$a %= $b;  
echo ("Hasil A5={$a}"); 
echo "<br>";
echo "<br>";
$hasilIdentik = $a === $b;
echo ("hasil Identik={$hasilIdentik}");
echo "<br>";
$hasilTidakIdentik = $a !== $b;
echo ("hasil Tidak Identik={$hasilTidakIdentik}");
?>