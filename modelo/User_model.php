<?php

class User_model
{
    private $db;

    public function __construct()
    {
        require_once 'db.php';
        $this->db = new Conexion();
    }

    public function insertUser($userData)
    {
        $query = "INSERT INTO users (username, password, role_id) VALUES ('$userData[username]', '$userData[password]', $userData[role_id])";
        return $this->db->ejecutar($query);
    }

    public function updateUser($id, $userData)
    {
        $query = '';
        if(isset($userData['password']) && !empty($userData['password'])){ 
            $query = "UPDATE users SET username='$userData[username]', password='$userData[password]', role_id=$userData[role_id] WHERE id=$id";
        }else{
            $query = "UPDATE users SET username='$userData[username]', role_id=$userData[role_id] WHERE id=$id";
        }
        return $this->db->ejecutar($query);
    }

    public function deleteUser($id)
    {
        $query = "DELETE FROM users WHERE id=$id";
        return $this->db->ejecutar($query);
    }

    public function getUser($username)
    {
        $query = "SELECT users.username,users.password,roles.name FROM users INNER JOIN roles ON users.role_id=roles.id WHERE username='$username'";
        return $this->db->seleccionar_id($query);
    }

    public function getUserById($id)
    {
        $query = "SELECT * FROM users WHERE id=$id";
        return $this->db->seleccionar_id($query);
    }

    public function getAllUsers()
    {
        $query = "SELECT users.id,users.username,roles.name FROM users INNER JOIN roles ON users.role_id=roles.id";
        return $this->db->seleccionar($query);
    }

    public function getAllRol()
    {
        $query = "SELECT * from roles";
        return $this->db->seleccionar($query);
    }
    


}