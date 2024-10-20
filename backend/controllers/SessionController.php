<?php

namespace Backend\Controllers;

class SessionController
{
    public static function checkAccess($pageAccess)
    {
        session_start(); 

        if ($pageAccess == "non-login") {
            
            if (isset($_SESSION['users'])) {
                header('Location: dashboard.php');
                exit();
            }
        } else if ($pageAccess == "users") {
            
            if (!isset($_SESSION['users'])) {
                header('Location: login.php');
                exit();
            }
        }
    }
}
