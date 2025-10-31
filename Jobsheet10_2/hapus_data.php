<?php
session_start();
include 'koneksi.php';

$id = $_POST['id'];

$queryName = "delete_anggota";
$query = "DELETE FROM anggota WHERE id = $1";

$prepare_result = pg_prepare($conn, $queryName, $query);

if (!$prepare_result) {
    echo json_encode(['error' => 'Gagal Prepare: ' . pg_last_error($conn)]);
    pg_close($conn);
    exit;
}

$result = pg_execute($conn, $queryName, array($id));

if ($result) {
    if (pg_affected_rows($result) > 0) {
        echo json_encode(['success' => 'Sukses']);
    } else {
        echo json_encode(['error' => 'Data tidak ditemukan atau sudah terhapus.']);
    }
} else {
    echo json_encode(['error' => 'Gagal ' . pg_last_error($conn)]);
}

pg_close($conn);
?>