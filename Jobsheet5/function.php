<?php

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam . ", ";
    echo "Perkenalkan, nama saya" . $nama . "<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Hamdana","Halo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

// memanggil lagi
perkenalan($saya);
?>