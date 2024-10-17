<?php
$pageAccess = "users"; // Sesuaikan dengan akses halaman (non-login atau users)
require '../db/connect.php'; 
require '../controllers/UsersController.php';
require '../controllers/SessionController.php'; 

use Backend\Controllers\UsersController;
use Backend\Controllers\SessionController;

// Panggil SessionController untuk mengecek akses
SessionController::checkAccess($pageAccess);

// Instansiasi UsersController
$usersController = new UsersController($conn);

// Panggil metode gantiUserPassword
$usersController->gantiUserPassword();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Password</title>
</head>
<body>
    <h1>GANTI PASSWORD</h1>
    <form method="post">
        <p>PASSWORD LAMA</p>
        <input type="password" name="password_old" required>
        <p>PASSWORD BARU</p>
        <input type="password" name="password_new" required>
        <button type="submit" name="ubah_password">Ubah Password</button>
    </form>
</body>
</html>
