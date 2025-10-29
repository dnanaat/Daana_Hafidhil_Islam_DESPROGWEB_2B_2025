<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $psg = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = pg_query($conn, $psg);
    $cek = pg_num_rows($result);

    if($cek > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        ?>
        Anda berhasil login. Silakan menuju 
        <a href="homeSession.php">Halaman Home</a>
        <?php
    } else {
        ?>
        Anda gagal login. Silahkan coba lagi di 
        <a href="sessionLoginForm.html">Halaman Login</a>.
        <?php
        echo pg_last_error($conn);
    }
?>