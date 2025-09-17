<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$rataNilai = 0;
sort($nilaiSiswa);

array_shift($nilaiSiswa);
array_shift($nilaiSiswa);

array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

echo "List nilai siswa setelah disortir :<br>";
for ($i = 0; $i < count($nilaiSiswa); $i++) {
    echo"". $nilaiSiswa[$i] ."<br>";
    $rataNilai += $nilaiSiswa[$i];
}

$rataNilai = $rataNilai / count($nilaiSiswa);
echo "Rata-rata nilai setelah 2 nilai tertinggi dan terendah dikeluarkan yaitu $rataNilai.";
?>