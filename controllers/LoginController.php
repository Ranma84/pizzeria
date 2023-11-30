<?php

class LoginController
{
    public function showLoginForm()
    {
        include('views/login.php');
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username === 'admin' && $password === 'password') {
            $_SESSION['user'] = $username;
            header('Location: ' . BASE_URL . 'home');
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

?>
