<?php

require 'function.php';

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
        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .register-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }
        .register-card h4 {
            margin-bottom: 1.5rem;
            color: #333;
            font-weight: 600;
            text-align: center;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }
        .btn-register {
            width: 100%;
            padding: 0.75rem;
            background-color: #007bff;
            border: none;
            font-weight: 600;
        }
        .btn-register:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            font-size: 0.875rem;
            text-align: center;
            margin-top: 0.5rem;
        }
    </style>
    <title>Register</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Kerja Rodi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->

    <div class="register-container">
        <div class="register-card">
            <h4>Register | Admin</h4>
            <!-- Pesan Error -->
            <?php if (isset($error)) : ?>
                <div class="error-message">Username atau Password sudah digunakan!</div>
            <?php endif; ?>
            <form action="process_register.php" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan Username" name="username" autocomplete="off" required>
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control" placeholder="Masukkan Password" name="password" autocomplete="off" required>
                </div>
                <button class="btn btn-primary btn-register" type="submit" name="register">Register</button>
            </form>
            <div class="text-center mt-3">
                <small>Sudah punya akun? <a href="login.php">Masuk di sini</a></small>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
