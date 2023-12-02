<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];

    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "pizzeria";

    // Crea la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $nombre = $conn->real_escape_string($nombre);
    $descripcion = $conn->real_escape_string($descripcion);
    $precio = $conn->real_escape_string($precio);

    $sql = "INSERT INTO products (name_, description_, price) VALUES ('$nombre', '$descripcion', '$precio')";

    if ($conn->query($sql) === TRUE) {
        header("Location: producto_agregado.php?nombre=$nombre&descripcion=$descripcion&precio=$precio");
        exit();
    } else {
        echo "Error al agregar producto: " . $conn->error;
    }

    // Cierra la conexión a la base de datos
    $conn->close();
} else {
    header("Location: ingreso_productos.php");
    exit();
}
?>
