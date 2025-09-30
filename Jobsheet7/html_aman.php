<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Aman</title>
</head>
<body>
    <h2>Form Input Aman</h2>
    <form method="post" action="">
        <label for="input">Masukkan Teks :</label>
        <input type="text" name="input" id="input" required>
        <br><br>
        <label for="email">Masukkan Email :</label>
        <input type="text" name="email" id="email" required>
        <br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "<br>Input : " . $input . "<br>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email " . $email . " valid!";
        } else {
            echo "Email tidak valid";
        }
    }

    ?>
</body>
</html>
