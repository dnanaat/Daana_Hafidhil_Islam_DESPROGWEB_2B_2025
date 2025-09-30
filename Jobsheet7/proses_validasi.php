<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();

    // Validasi nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi!";
    }

    // Validasi email
    if (empty($email)) {
        $errors[] = "Email harus diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid!";
    }
    
    // Validasi password
    if (empty($password)) {
        $errors[] = "Password harus diisi!";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password harus terdiri dari minimal 8 karakter!";
    }

    // Jika ada kesalahan validasi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya menyimpan ke database atau kirim email
        echo "Data berhasil dikirim : Nama = $nama, Email = $email";
    }
}
?>