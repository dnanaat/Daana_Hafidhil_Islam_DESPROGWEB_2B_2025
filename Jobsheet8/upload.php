<?php

if (isset($_POST["submit"])) {
    $targetdir = "uploads/"; // Direktori tujuan penyimpanan file
    $targetfile = $targetdir . basename($_FILES["file"]["name"]);
    $filetype = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png");
    $maxsize = 3*1024*1024; // 3MB

    if (in_array($filetype, $allowedExtensions) && $_FILES["file"]["size"]<= $maxsize) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetfile)) {
            echo "File berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}

?>