<?php
session_start();
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Santapin</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';
        $password = md5($_POST['password'] ?? ''); 

        $query = mysqli_query($connection, "SELECT * FROM user WHERE email='$email' AND password='$password'");

        if (!$query) {
            $error_message = "Terjadi kesalahan pada server: " . mysqli_error($connection);
        } elseif (mysqli_num_rows($query) > 0) {

            $data = mysqli_fetch_assoc($query);
            $_SESSION['user'] = $data;
            $_SESSION['user_name'] = $data['nama']; 
            
            header('Location: homepage.php');
            exit;

        } else {
            $error_message = "Email atau password salah.";
        }
    }
    
        
    ?>

    <header class="header">
        <h1>Login</h1> <!-- Tulisan "Login" akan memiliki background hitam dan ukuran besar -->
    </header>

    <div class="login-container">

        <?php if (isset($error_message)): ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <p>Belum punya akun? <a href="registrasi.php">Registrasi</a></p> 
        <form method="POST" action="login.php">
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</body>
</html>
