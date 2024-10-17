<?php
    require '../db/connect.php'; 
    require '../controllers/SessionController.php'; 
    require '../controllers/JadwalController.php'; 
    
    use Backend\Controllers\SessionController;
    use Backend\Controllers\JadwalController;
    
    
    SessionController::checkAccess("users");
    
    $jadwalController = new JadwalController($conn);
    $jadwalControllerResult = $jadwalController->getTableJadwal();
    
    $jadwalControllerResultData = $jadwalControllerResult['getTableJadwaldata']; 
    $jadwalControllerResultCount = $jadwalControllerResult['getTableJadwalCount']; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
</head>
<body>
    <h1>Jadwal</h1>

    <?php if ($jadwalControllerResultCount > 0): ?>
        <ul>
            <?php foreach ($jadwalControllerResultData as $jadwal): ?>
                <li><?= $jadwal['hari_mata_kuliah'] . " - " . $jadwal['waktu_mata_kuliah'] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Tidak ada jadwal tersedia.</p>
    <?php endif; ?>
    
</body>
</html>
