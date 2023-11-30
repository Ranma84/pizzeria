<?php

class User_model
{
    private $db;

    public function __construct()
    {
        require_once '../db.php';
        $this->db = new Conexion();
    }

    public function insertUser($userData)
    {
        $query = "INSERT INTO users (username, password, role_id) VALUES ('$userData[username]', '$userData[password]', $userData[role_id])";
        return $this->db->ejecutar($query);
    }

    public function updateUser($id, $userData)
    {
        $query = "UPDATE users SET username='$userData[username]', password='$userData[password]', role_id=$userData[role_id] WHERE id=$id";
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