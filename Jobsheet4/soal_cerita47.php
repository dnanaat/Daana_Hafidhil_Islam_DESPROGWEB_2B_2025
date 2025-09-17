<?php

$hargaBarang = 120000;
echo "Harga barang : Rp ".$hargaBarang.".<br>";
echo "Barang sedang diproses...<br><br>";

if ($hargaBarang > 100000) {
    echo "Selamat anda mendapatkan discount sebesar 20%<br>";
    $hargaBarang = $hargaBarang - ($hargaBarang * 0.2);
}

echo "Total harga : Rp ".$hargaBarang.".";

?>