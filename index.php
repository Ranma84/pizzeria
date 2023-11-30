<?php
session_start();
require 'config.php';
require 'db.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'login';

if (!file_exists("controllers/$action.php")) {
    $action = 'login';
}

if ($action === 'login') {
    require 'controllers/LoginController.php';
    $loginController = new LoginController();
    $loginController->showLoginForm();
} elseif ($action === 'logout') {
    require 'controllers/LoginController.php';
    $loginController = new LoginController();
    $loginController->logout();
} else {
    require "controllers/$action.php";
}
