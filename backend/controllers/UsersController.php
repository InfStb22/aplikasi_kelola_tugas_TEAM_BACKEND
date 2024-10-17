<?php

namespace Backend\Controllers;

require_once __DIR__ . '/../models/User.php'; 

use Backend\Models\User;

class UsersController
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getUserData()
    {
        if (!isset($_SESSION)) {
            session_start(); // Pastikan session dimulai
        }

        if (!isset($_SESSION['users'])) {
            // Jika session user tidak ada, redirect ke halaman login
            header('Location: login.php');
            exit();
        }

        $userId = $_SESSION['users']; 
        
        $userModel = new User($this->conn);
        $user = $userModel->getUserById($userId);

        if ($user) {
            return $user; 
        } else {
            echo "Pengguna tidak ditemukan.";
            exit();
        }
    }

    public function getNimFromSession()
    {
        $user = $this->getUserData(); 
        return $user ? $user['user_nim'] : null; 
    }

    public function gantiUserPassword()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ubah_password'])) {
            
            if (!isset($_SESSION)) {
                header('Location: login.php');
                exit();
            }

            $userId = $_SESSION['users']; // Ambil user ID dari session
            $passwordOld = $_POST['password_old'];
            $passwordNew = $_POST['password_new'];

            // Validasi input dasar
            if (empty($passwordOld) || empty($passwordNew)) {
                die("Password tidak boleh kosong.");
            }

            // Instansiasi model User
            $userModel = new User($this->conn);
            $user = $userModel->getUserById($userId);

            if ($user) {
                $hashed_password = $user['user_password'];

                // Verifikasi password lama
                if (password_verify($passwordOld, $hashed_password)) {
                    // Cek apakah password baru sama dengan password lama
                    if (!password_verify($passwordNew, $hashed_password)) {
                        // Update password jika valid
                        $updateSuccess = $userModel->updatePassword($userId, $passwordNew);
                        
                        if ($updateSuccess) {
                            echo "Password berhasil diubah.";
                        } else {
                            echo "Gagal mengubah password.";
                        }
                    } else {
                        echo "Password baru tidak boleh sama dengan password lama.";
                    }
                } else {
                    echo "Password lama salah.";
                }
            } else {
                echo "User tidak ditemukan.";
            }
        }
    }
}
