<?php

namespace Backend\Controllers;

require_once __DIR__ . '/../models/Jadwal.php'; 

use Backend\Models\Jadwal;

class JadwalController
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getTableJadwal()
    {
        $jadwalModel = new Jadwal($this->conn);
        return $jadwalModel->getTableJadwal(); 
    }

    
}
