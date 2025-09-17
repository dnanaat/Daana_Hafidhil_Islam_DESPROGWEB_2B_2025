<?php
$nilaiNumerik = 92;

echo "Bagian 1<br>";
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf : A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf : B";
} else if ($nilaiNumerik >= 70 && $nilaiMatematika < 80) {
    echo "Nilai huruf : C";
} else if ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

echo "<br><br>Bagian 2<br>";
echo "Diketahui :<br>";
echo "Jarak Saat Ini : $jarakSaatIni <br>";
echo "Jarak Target   : $jarakTarget <br>";
echo "Peningkatan Harian : $peningkatanHarian <br>";

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Bagian 3<br>";
echo "Jumlah Lahan : $jumlahLahan<br>";
echo "Jumlah Tanaman Per Lahan : $tanamanPerLahan<br>";
echo "Jumlah Buah Lahan : $buahPerTanaman<br>";
echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalskor = 0;

foreach ($skorUjian as $skor) {
    $totalskor += $skor;
}

echo "Bagian 4<br>";
for ($i = 0; $i < count($skorUjian); $i++) {
    echo "Skor siswa $i adalah $skorUjian[$i]<br>";
}
echo "Total skor ujian adalah : $totalskor<br><br>";

echo "Bagian 5<br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

$nilai = 0;
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai : $nilai (Tidak Lulus)<br>";
        continue;
    }
    echo "Nilai : $nilai (Lulus)<br>";
}
?>