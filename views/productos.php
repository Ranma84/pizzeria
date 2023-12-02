<?php

session_start();


if (!isset($_SESSION['loggedin'])) {

    header('Location: productos.php');
    exit;
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'biblioteca';

// conexion a la base de datos

$conexion = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {

    // si se encuentra error en la conexión

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="loggedin">
    <style>
        *{
            box-sizing: border-box;
        }
        section{
            max-width: 600px;
            margin: auto;
            text-align: center;
            border: 1px solid #000;
            border-radius: 5px;
            padding: 10px;
            background-color: #ffc107;
        }
        input{
            width: 70%;
            padding: 10px;
        }
    </style>
    <section>
        <div class="content">
            <h2>Listado de productos</h2>
        </div>
        <div>
            <table border="1"" align="center">
                <tr>
                    <td>ID</td>
                    <td>NOMBRE</td>
                    <td>PRECIO</td>
                    <td>OPCIONES</td>
                </tr>
                <?php
                    $cnx = mysqli_connect('localhost', 'root', '', 'biblioteca');
                    $sql = "SELECT id, name, price from products order by id desc";
                    $rta = mysqli_query($cnx, $sql);
                    while($mostrar=mysqli_fetch_row($rta)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['0']?></td>
                        <td><?php echo $mostrar['1']?></td>
                        <td><?php echo $mostrar['2']?></td>
                        <td>
                            <a href="editar.php?
                            id=<?php echo $mostrar['0']?> &
                            name=<?php echo $mostrar['1']?> &
                            price=<?php echo $mostrar['2']?>
                            ">Editar</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
        </div>
    </section>
</body>

</html>