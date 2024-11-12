<?php
session_start();
// Jika bisa login maka ke index.php
if (isset($_SESSION['login'])) {
    header('location:index.php');
    exit;
}

// Memanggil atau membutuhkan file function.php
require 'function.php';

// jika tombol yang bernama login diklik
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // password menggunakan md5

    // mengambil data
    $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");

    $cek = mysqli_num_rows($result);

    if ($cek > 0) {
        $_SESSION['login'] = true;

        header('location:index.php');
        exit;
    }
 
    $error = true;  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <style>
        body {
            font-family: 'Righteous', cursive;
            background-color: #f4f6f9;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }
        .login-card h4 {
            margin-bottom: 1.5rem;
            color: #333;
            font-weight: 600;
            text-align: center;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }
        .btn-login {
            width: 100%;
            padding: 0.75rem;
            background-color: #007bff;
            border: none;
            font-weight: 600;
        }
        .btn-login:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            font-size: 0.875rem;
            text-align: center;
            margin-top: 0.5rem;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h4>Login | Admin</h4>
            <!-- Error Message -->
            <?php if (isset($error)) : ?>
                <div class="error-message">Username atau Password Salah!</div>
            <?php endif; ?>
            <!-- Form -->
            <form action="" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan Username" name="username" autocomplete="off" required>
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control" placeholder="Masukkan Password" name="password" autocomplete="off" required>
                </div>
                <button class="btn btn-primary btn-login" type="submit" name="login">Login</button>
            </form>
            <div class="text-center mt-3">
                <small>Belum punya akun? <a href="register.php">Daftar di sini</a></small>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
