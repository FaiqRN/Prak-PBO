<?php
$kursiPenuh = 45;
$kursiDitempati = 28;
$hasilKurang = $kursiPenuh - $kursiDitempati;
echo("Hasil kursi yang ditempati {$hasilKurang}");
echo "<br>";
$hasilPersen = $hasilKurang / $kursiPenuh * 100;
echo("Persentase Sisa Kursi adalah " . number_format((float)$hasilPersen,1 ,'.','')."%");
?>