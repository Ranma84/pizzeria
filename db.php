<?php

$host = 'localhost';
$db_name = 'biblioteca';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

define('HOST', $host);
define('DDB_NAME', $db_name);
define('USERNAME', $username);
define('PASSWORD', $password);
define('CHARSET', $charset);

class Conexion
{
    private $link;

    public function __construct()
    {
        $this->link = new mysqli(HOST, USERNAME, PASSWORD, DDB_NAME);
        if ($this->link->connect_error) {
            die("Error de conexión: " . $this->link->connect_error);
        }
        $this->link->set_charset(CHARSET);
    }

    public function ejecutar($query)
    {
        $resultado = $this->link->query($query);
        if (!$resultado) {
            die("Error en la consulta: " . $this->link->error);
        }
        return true;
    }

    public function seleccionar($query)
    {
        $resultado = $this->link->query($query);
        if (!$resultado) {
            die("Error en la consulta: " . $this->link->error);
        }

        $data = [];
        while ($row = $resultado->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    public function seleccionar_id($query)
    {
        $resultado = $this->link->query($query);
        if (!$resultado) {
            die("Error en la consulta: " . $this->link->error);
        }
        $row = $resultado->fetch_assoc();
        return $row;
    }

    public function __destruct()
    {
        if ($this->link) {
            $this->link->close();
        }
    }
}