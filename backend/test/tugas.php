<?php session_start(); ?>
<?php $pageName = "user-tugas"; ?>
<?php $pageAccess = "users"; ?>
<?php include ('../../db/connect.php'); ?>
<?php include ('../../controllers/AuthController.php'); ?>
<?php include ('../../controllers/SessionController.php'); ?>
<?php include ('../../controllers/TugasController.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    <h1>TUGAS</h1>
</body>
</html>