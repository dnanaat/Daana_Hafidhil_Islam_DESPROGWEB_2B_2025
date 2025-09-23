<?php

$nama = @$_GET['nama'];
$usia = @$_GET['usia'];
// tanda @ agar tidak ada peringatan error saat key nya kosong

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>