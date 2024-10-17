<?php session_start(); ?>
<?php $pageName = "user-jadwal"; ?>
<?php $pageAccess = "users"; ?>
<?php include ('../db/connect.php'); ?>
<?php include ('../controllers/AuthController.php'); ?>
<?php include ('../controllers/SessionController.php'); ?>
<?php include ('../controllers/JadwalController.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
</head>
<body>
    <h1>Jadwal</h1>
</body>
</html>