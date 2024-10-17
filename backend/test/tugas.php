<?php
    require '../db/connect.php'; 
    require '../controllers/SessionController.php'; 
    require '../controllers/TugasController.php'; 
    
    use Backend\Controllers\SessionController;
    use Backend\Controllers\TugasController;
    
    
    SessionController::checkAccess("users");
    
    $tugasController = new TugasController($conn);
    $tugasControllerResult = $tugasController->getTabletugas();
    
    $tugasControllerResultData = $tugasControllerResult['getTableTugasdata']; 
    $tugasControllerResultCount = $tugasControllerResult['getTableTugasCount']; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
</head>
<body>
    <h1>tugas</h1>

    <?php if ($tugasControllerResultCount > 0): ?>
        <ul>
            <?php foreach ($tugasControllerResultData as $tugas): ?>
                <li>tugas ada</li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Tidak ada Tugas</p>
    <?php endif; ?>
    
</body>
</html>
