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
    <a href="dashboard.php">dashboard</a>
    <a href="jadwal.php">Jadwal</a>
    <a href="tugas.php">Tugas</a>
    <a href="settings.php">Settings</a>

    <?php if ($jadwalControllerResultCount > 0): ?>
        <?php foreach ($jadwalControllerResultData as $index => $value ): ?>
            <ul>
    <li><strong>Nama Mata Kuliah:</strong> <?= htmlspecialchars($value['nama_mata_kuliah'], ENT_QUOTES, 'UTF-8') ?></li>
    <li><strong>Dosen Mata Kuliah:</strong> <?= htmlspecialchars($value['dosen_mata_kuliah'], ENT_QUOTES, 'UTF-8') ?></li>
    <li><strong>Hari:</strong> <?= htmlspecialchars($value['hari_mata_kuliah'], ENT_QUOTES, 'UTF-8') ?></li>
    <li><strong>Waktu:</strong> <?= htmlspecialchars($value['waktu_mata_kuliah'], ENT_QUOTES, 'UTF-8') ?></li>
</ul>
        <?php endforeach; ?>
    <?php else : ?>
        <p>Tidak ada jadwal tersedia.</p>
    <?php endif; ?>
    
</body>
</html>
