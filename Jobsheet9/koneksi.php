<?php
// Koneksi ke PostgreSQL
$conn = pg_connect("host=localhost port=5432 dbname=praktikumdb user=postgres password=12345678");

if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}
?>