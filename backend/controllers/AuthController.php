<?php

namespace Backend\Controllers;

require_once __DIR__ . '/../models/User.php'; 

use Backend\Models\User;

class AuthController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db; 
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nim = $_POST['nim'];
            $password = $_POST['password'];
        
            
            if (empty($nim) || empty($password)) {
                die("NIM atau password tidak boleh kosong.");
            }

            
            $userModel = new User($this->db);
            $user = $userModel->getUserByNim($nim);
            
            if ($user) {
                $hashed_password = $user['user_password'];
                
                if (password_verify($password, $hashed_password)) {
                    
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
