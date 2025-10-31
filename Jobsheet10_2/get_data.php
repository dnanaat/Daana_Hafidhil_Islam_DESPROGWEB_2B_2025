<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = $_POST['id'];

$query = "SELECT * FROM anggota WHERE id = $1 ORDER BY id DESC";
$result = pg_query_params($conn, $query, array($id));

$h = array();

if ($result && pg_num_rows($result) > 0) {
    $row = pg_fetch_assoc($result);
    $h['id'] = $row['id'];
    $h['nama'] = $row['nama'];
    $h['jenis_kelamin'] = $row['jenis_kelamin'];
    $h['alamat'] = $row['alamat'];
    $h['no_telp'] = $row['no_telp'];
} else {
    $h['error'] = "Data tidak ditemukan untuk ID: " . $id;
}
header('Content-Type: application/json');
echo json_encode($h);
pg_close($conn);
?>
