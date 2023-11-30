<?php

class User_model
{
    private $db;

    public function __construct()
    {
        require_once '../db.php';
        $this->db = new Conexion();
    }

    public function insertUser($username, $password, $role_id)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username, password, role_id) VALUES ('$username', '$hashedPassword', $role_id)";
        return $this->db->ejecutar($query);
    }

    public function updateUser($id, $username, $password, $role_id)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "UPDATE users SET username='$username', password='$hashedPassword', role_id=$role_id WHERE id=$id";
        return $this->db->ejecutar($query);
    }

    public function deleteUser($id)
    {
        $query = "DELETE FROM users WHERE id=$id";
        return $this->db->ejecutar($query);
    }

    public function getUserById($id)
    {
        $query = "SELECT * FROM users WHERE id=$id";
        return $this->db->seleccionar_id($query);
    }

    public function getAllUsers()
    {
        $query = "SELECT * FROM users";
        return $this->db->seleccionar($query);
    }
}