<?php

namespace Backend\Controllers;

require_once __DIR__ . '/../models/User.php'; // Include model

use Backend\Models\User;

class AuthController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db; // Simpan koneksi database
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nim = $_POST['nim'];
            $password = $_POST['password'];
        
            // Validasi input dasar
            if (empty($nim) || empty($password)) {
                die("NIM atau password tidak boleh kosong.");
            }

            // Instansiasi model User, sambil mengirimkan koneksi $this->db
            $userModel = new User($this->db);
            $user = $userModel->getUserByNim($nim);
            
            if ($user) {
                $hashed_password = $user['user_password'];
                
                if (password_verify($password, $hashed_password)) {
                    // Login berhasil
                    $_SESSION['users'] = $user['user_id'];
                    header('Location: dashboard.php');
                    exit();
                } else {
                    echo "USERNAME DAN PASSWORD SALAH";
                }
            } else {
                echo "USERNAME DAN PASSWORD SALAH";
            }
        }
    }
}
