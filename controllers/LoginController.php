<?php

class LoginController
{
    private $userModel;

    public function showLoginForm()
    {
        include('views/login.php');
    }

    public function login()
    {
        require_once 'modelo/User_model.php';
        $username = isset($_POST['username'])? $_POST['username'] : '';
        $password = isset($_POST['password'])? $_POST['password'] : '';

        $this->userModel = new User_model();
        $user=$this->userModel->getUser($username);
        if (isset($user['username']) && !empty($user['username']) && password_verify($password,$user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['rol'] = $user['name'];
            header('Location: ' . BASE_URL . 'index.php?controller=DasboardController');
        } else {
            $error = 'Usuario o contraseña incorrectos.';
            include('views/login.php');
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . BASE_URL);
    }
}

