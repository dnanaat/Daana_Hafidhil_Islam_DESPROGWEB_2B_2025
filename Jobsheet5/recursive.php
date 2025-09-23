<?php

function tampilkanAngka(int $jumlah, int $indeks = 1){
    echo "Perulangan ke-{$indeks} <br>";

    // perulangan diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
?>