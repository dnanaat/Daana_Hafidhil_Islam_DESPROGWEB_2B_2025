<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = stripslashes(strip_tags(htmlspecialchars($_POST['id'], ENT_QUOTES)));
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

if ($id == "") {
    // INSERT data baru
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES ($1, $2, $3, $4)";
    $result = pg_query_params($conn, $query, array($nama, $jenis_kelamin, $alamat, $no_telp));
} else {
    // UPDATE data berdasarkan ID
    $query = "UPDATE anggota SET nama = $1, jenis_kelamin = $2, alamat = $3, no_telp = $4 WHERE id = $5";
    $result = pg_query_params($conn, $query, array($nama, $jenis_kelamin, $alamat, $no_telp, $id));
}

if ($result) {
    echo json_encode(['success' => 'Sukses']);
} else {
    echo json_encode(['error' => 'Gagal menyimpan data']);
}

pg_close($conn);
?>
