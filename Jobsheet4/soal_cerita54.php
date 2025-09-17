<?php

$nilaiSiswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],   
    ["Eva", 90],   
];
foreach ($nilaiSiswa as $siswa) {
    echo"". $siswa[0] ." mempunyai nilai ". $siswa[1] . ".<br>";
};

$nilaiDiatasRata = [];
$rataNilai = 0;

foreach ($nilaiSiswa as $siswa) {
    $rataNilai += $siswa[1];
}

$rataNilai = $rataNilai / count($nilaiSiswa);

foreach ($nilaiSiswa as $nilai) {
    if ($nilai[1] > $rataNilai) {
        $nilaiDiatasRata[] = $nilai[1];
    }
}
echo "<br>Daftar nilai siswa yang diatas rata-rata yaitu : " . implode(", ", $nilaiDiatasRata) ."";

?>