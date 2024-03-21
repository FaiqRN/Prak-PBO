<?php
function perkenalan($nama,$salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya".$nama."<br/>"; 
    echo "Senang berkenalan dengan Anda<br/>";
}
perkenalan("FaiqRN","Hallo");
echo "<hr>";

$saya ="Ramzeees666";
$ucapanSalam ="Selamat pagi";
perkenalan($saya);
?>