<?php
session_start();
require '../db/connect.php'; // Koneksi database
require '../controllers/UsersController.php'; // Controller pengguna

use Backend\Controllers\UsersController;

// Instansiasi UsersController
$usersController = new UsersController($conn);

// Ambil data pengguna
$user = $usersController->getUserData();

if ($user) {
    $nim = $user['user_nim']; // Ambil NIM dari hasil query
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang di Dashboard, <?= htmlspecialchars($nim) ?></h1>
</body>
</html>
