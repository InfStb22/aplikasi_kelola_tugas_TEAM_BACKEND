<?php
    use Backend\Controllers\UsersController;
    $usersController = new UsersController($conn);
    $user = $usersController->getUserData();