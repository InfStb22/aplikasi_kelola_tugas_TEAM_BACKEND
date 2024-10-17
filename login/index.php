<?php
session_start();
require '../backend/db/connect.php'; // Koneksi database
require '../backend/controllers/UsersController.php'; // Controller pengguna

use Backend\Controllers\UsersController;
$usersController = new UsersController($conn);
$nim = $usersController->getNimFromSession();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang di Dashboard, <?= htmlspecialchars($nim); ?></h1>
</body>
</html>
