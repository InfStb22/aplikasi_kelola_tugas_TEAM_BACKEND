<?php

namespace Backend\Controllers;

require_once __DIR__ . '/../models/User.php'; // Meng-include model User

use Backend\Models\User;

class UsersController
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Fungsi untuk mengambil user berdasarkan session ID
    public function getUserData()
    {
        if (!isset($_SESSION['users'])) {
            // Jika session user ID tidak ada, redirect ke login
            header('Location: login.php');
            exit();
        }

        $userId = $_SESSION['users']; // Ambil user ID dari session

        // Instansiasi model User dan ambil data user berdasarkan user ID
        $userModel = new User($this->conn);
        $user = $userModel->getUserById($userId);

        if ($user) {
            return $user; // Mengembalikan data user
        } else {
            echo "Pengguna tidak ditemukan.";
            exit();
        }
    }

    public function getNimFromSession()
    {
        $user = $this->getUserData(); // Dapatkan data pengguna
        return $user ? $user['user_nim'] : null; // Kembalikan NIM atau null
    }
}
