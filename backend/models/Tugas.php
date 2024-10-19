<?php

namespace Backend\Models;

class Tugas
{
    private $conn;
    private $table = 'tugas';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getTableTugas()
    {
        $query = "SELECT * FROM " . $this->table . " ORDER BY dateline_tugas ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
    
        // Array untuk hari dalam bahasa Indonesia
        $hari = [
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu',
            'Sunday' => 'Minggu'
        ];
    
        // Array untuk bulan dalam bahasa Indonesia
        $bulan = [
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];
    
        $getTableTugasCount = 0;
        $getTableTugasData = [];
        $today = strtotime(date('Y-m-d'));
        
        if ($result->num_rows > 0) {
            $getTableTugasCount = 1;
            while ($row = $result->fetch_assoc()) {
                $timestamp = strtotime($row['dateline_tugas']);
                $namaHariInggris = date('l', $timestamp);
                $row['hari'] = $hari[$namaHariInggris];
    
                // Menambahkan variabel bulan dalam format yang lebih rapi
                $row['bulan'] = $bulan[date('n', $timestamp)];
    
                // Memformat tanggal menjadi string dengan bulan dalam bahasa Indonesia
                $row['dateline_tugas'] = date('d', $timestamp) . ' ' . $row['bulan'] . ' ' . date('Y', $timestamp);
    
                if ($timestamp > $today) {
                    $row['status'] = 1;
                    $row['status_message'] = "Belum Lewat Dateline";
                } else {
                    $row['status'] = 0; 
                    $row['status_message'] = "Sudah Lewat Dateline";
                }
                $getTableTugasData[] = $row;
            }
        } else {
            $getTableTugasCount = 0;
        }
    
        return ['getTableTugasCount' => $getTableTugasCount, 'getTableTugasdata' => $getTableTugasData];
    }
    


}
