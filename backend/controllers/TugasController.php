<?php

namespace Backend\Controllers;

require_once __DIR__ . '/../models/Tugas.php'; 

use Backend\Models\Tugas;

class TugasController
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getTableTugas()
    {
        
        $tugasModel = new Tugas($this->conn);
        return $tugasModel->getTableTugas(); 
    }

    
}
