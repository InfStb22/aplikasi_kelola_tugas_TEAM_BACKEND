<?php

namespace Backend\Models;

class Jadwal
{
    private $conn;
    private $table = 'jadwal';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getTableJadwal()
    {
        $query = "SELECT * FROM " . $this->table . " ORDER BY hari_mata_kuliah ASC, waktu_mata_kuliah ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $getTableJadwalCount = 0;
        $getTableJadwalData = [];
        if ($result->num_rows > 0) {
            $getTableJadwalCount = 1;
            while ($row = $result->fetch_assoc()) {
                $getTableJadwal[] = $row;
            }
        } else {
            $getTableJadwalCount = 0;
        }

        return ['getTableJadwalCount' => $getTableJadwalCount, 'getTableJadwaldata' => $getTableJadwalData];
    }

}
