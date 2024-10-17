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
        $query = "SELECT * FROM " . $this->table . " ORDER BY dateline_tugas DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $getTableTugasCount = 0;
        $getTableTugasData = [];
        if ($result->num_rows > 0) {
            $getTableTugasCount = 1;
            while ($row = $result->fetch_assoc()) {
                $getTableTugas[] = $row;
            }
        } else {
            $getTableTugasCount = 0;
        }

        return ['getTableTugasCount' => $getTableTugasCount, 'getTableTugasdata' => $getTableTugasData];
    }

}
