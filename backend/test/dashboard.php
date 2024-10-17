<?php
require '../db/connect.php'; 
require '../controllers/SessionController.php'; 
require '../controllers/UsersController.php'; 

use Backend\Controllers\SessionController;
use Backend\Controllers\UsersController;

SessionController::checkAccess("users");

$usersController = new UsersController($conn);
$user = $usersController->getUserData();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang di Dashboard, <?= htmlspecialchars( $user['user_nim'] ) ?></h1>
    <a href="logout.php">logout</a>
</body>
</html>
