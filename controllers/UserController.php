<?php

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User_model();
    }

    public function index()
    {
        $users = $this->userModel->getAllUsers();
        include 'views/users/index.php';
    }

    public function show($userId)
    {
        $user = $this->userModel->getUserById($userId);
        include 'views/users/show.php';
    }

    public function create()
    {
        include 'views/users/create.php';
    }

    public function store()
    {
        // Validar y procesar el formulario de creación
        $userData = [
            'username' => $_POST['username'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'role_id' => $_POST['role_id']
        ];

        $this->userModel->addUser($userData);
        header('Location: index.php');
    }

    public function edit($userId)
    {
        $user = $this->userModel->getUserById($userId);
        include 'views/users/edit.php';
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

