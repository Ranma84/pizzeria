<?php

class UserController
{
    private $userModel;

    public function __construct()
    {
        require_once '../modelo/User_model.php';
        $this->userModel = new User_model();
      
    }

    public function index()
    {
        $users = $this->userModel->getAllUsers();
        include '../views/users/index.php';
    }

    public function show($userId)
    {
        $user = $this->userModel->getUserById($userId);
        include '../views/users/show.php';
    }

    public function create()
    {
        include '../views/users/create.php';
    }

    public function store()
    {
        // Validar y procesar el formulario de creación
        $userData = [
            'username' => trim($_POST['username']),
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'role_id' => $_POST['role_id']
        ];

        $this->userModel->insertUser($userData);
        header('Location: index.php');
    }

    public function edit($userId)
    {
        $user = $this->userModel->getUserById($userId);
        include '../views/users/edit.php';
    }

    public function update($userId)
    {
        // Validar y procesar el formulario de edición
        $userData = [
            'username' => $_POST['username'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'role_id' => $_POST['role_id']
        ];
        $this->userModel->updateUser($userId, $userData);
        header('Location: index.php');
    }

    public function delete($userId)
    {
        $this->userModel->deleteUser($userId);
        header('Location: index.php');
    }
}

// Crea una instancia del controlador
$userController = new UserController();

// Decide la acción basada en la solicitud del usuario
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Ejecuta la acción correspondiente
if (method_exists($userController, $action)) {
    $userController->$action();
} else {
    // Maneja acciones no válidas
    echo 'Acción no válida';
}