<?php
session_start(); 
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Santapin</title>
    <link rel="stylesheet" href="registrasi.css">
</head>
<body>

<?php
if (isset($_POST['email'])) {
    $nama = mysqli_real_escape_string($connection, $_POST['name']); 
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = md5($_POST['password']); 

    $check_email = mysqli_query($connection, "SELECT * FROM user WHERE email='$email'");
    if (mysqli_num_rows($check_email) > 0) {
        echo '<script>alert("Email sudah terdaftar. Silakan gunakan email lain.")</script>';
    } else {
        $query = mysqli_query($connection, "INSERT INTO user(nama, email, password) VALUES('$nama', '$email', '$password')");
        if ($query) {
            echo '<script>alert("Selamat, pendaftaran Anda berhasil. Silakan login."); location.href="login.php";</script>';
        } else {
            echo '<script>alert("Pendaftaran gagal.")</script>';
        }
    }
}
?>


    <header class="header">
        <h1>Registrasi</h1>
    </header>
    <div class="register-container">
        <form id="registerForm" method="POST" onsubmit="return validateForm()">
            <p>Sudah punya akun? <a href="login.php">Login</a></p>
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Nama" required>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="register-btn">Daftar</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>