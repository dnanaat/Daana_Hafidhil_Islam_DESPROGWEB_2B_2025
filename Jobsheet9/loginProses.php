<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']); 

$query = 'SELECT * FROM users WHERE username=$1 AND password=$2';
$result = pg_query_params($conn, $query, [$username, $password]);

if (!$result) {
    echo "Query gagal: " . pg_last_error($conn);
} else {
    if (pg_num_rows($result) > 0) {
        echo "Anda berhasil login. Silakan menuju ";
        echo '<a href="homeAdmin.html">Halaman HOME</a>';
    } else {
        echo "Anda gagal login. Silakan ";
        echo '<a href="loginForm.html">Login kembali</a>';
    }
}
?>
