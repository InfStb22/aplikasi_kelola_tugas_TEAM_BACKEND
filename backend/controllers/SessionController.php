<?php

namespace Backend\Controllers;

class SessionController
{
    public static function checkAccess($pageAccess)
    {
        session_start(); // Pastikan session dimulai

        if ($pageAccess == "non-login") {
            // Jika pengguna sudah login, redirect ke dashboard
            if (isset($_SESSION['users'])) {
                header('Location: dashboard.php');
                exit();
            }
        } else if ($pageAccess == "users") {
            // Jika pengguna belum login, redirect ke login page
            if (!isset($_SESSION['users'])) {
                header('Location: login.php');
                exit();
            }
        }
    }
}
