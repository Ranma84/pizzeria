<?php
session_start();
require 'config.php';
require 'db.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'login';


if (!file_exists("controllers/$controller.php")) {
    $controller = 'login';
}

if ($controller === 'login') {
    require 'controllers/LoginController.php';
    $loginController = new LoginController();
    $loginController->showLoginForm();
} elseif ($controller === 'logout') {
    require 'controllers/LoginController.php';
    $loginController = new LoginController();
    $loginController->logout();
} else {
    require "controllers/$controller.php";
}
