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

function conectar()
{
    $link = new mysqli(HOST, USERNAME, PASSWORD, DDB_NAME);
    if ($link->connect_error) {
        die("Error de conexión: " . $link->connect_error);
    }
    $link->set_charset('utf8');
    return $link;
}


function desconectar($link)
{
    if ($link) {
        $link->close();
    }
}

function ejecutar($query)
{
    $conexion = conectar();
    try {
        if (!$conexion) {
            throw new Exception("Error de conexión.");
        }

        $resultado = $conexion->query($query);
        if (!$resultado) {
            throw new Exception("Error en la consulta: " . $conexion->error);
        }

        return true;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return false;
    } finally {
        desconectar($conexion);
    }
}

function seleccionar($query)
{
    $conexion = conectar();
    try {
        if (!$conexion) {
            throw new Exception("Error de conexión.");
        }

        $resultado = $conexion->query($query);
        if (!$resultado) {
            throw new Exception("Error en la consulta: " . $conexion->error);
        }

        $data = [];
        while ($row = $resultado->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return [];
    } finally {
        desconectar($conexion);
    }
}

function seleccionar_id($query)
{
    $conexion = conectar();
    try {
        if (!$conexion) {
            throw new Exception("Error de conexión.");
        }

        $resultado = $conexion->query($query);
        if (!$resultado) {
            throw new Exception("Error en la consulta: " . $conexion->error);
        }

        $row = $resultado->fetch_assoc();

        return $row;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return null;
    } finally {
        desconectar($conexion);
    }
}