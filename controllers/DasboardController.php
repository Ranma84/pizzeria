<?php

class DasboardController
{
    private $userModel;

    public function index()
    {
        if(!isset($_SESSION['username']) || empty($_SESSION['username']))
            header('Location: index.php?controller=LoginController');
        include('views/dasboardController.php');
    }
}

// Crea una instancia del controlador
$dasboardController = new DasboardController();

// Decide la acción basada en la solicitud del usuario
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// ID de la clase
$userId = isset($_GET['userId']) ? $_GET['userId'] : '';

// Ejecuta la acción correspondiente
if (method_exists($dasboardController, $action)) {
    $dasboardController->$action($userId);
} else {
    // Maneja acciones no válidas
    echo 'Acción no válida';
}