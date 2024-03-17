<?php
function perkenalan($nama,$salam="Assalamualaikum"){
    echo$salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
perkenalan("Faiq","Hallo");
echo"<hr>";
$saya = "faiq";
$ucapkanSalam ="Selamat pagi";
perkenalan($saya);
?>