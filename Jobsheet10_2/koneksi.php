<?php
define('HOST', 'localhost');
define('PORT', '5432');
define('DBNAME', 'praktikumdb');
define('USER', 'postgres');
define('PASS', '12345678');

// Buat koneksinya
$conn = pg_connect("host=" . HOST . " port=" . PORT . " dbname=" . DBNAME . " user=" . USER . " password=" . PASS);

if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}
?>