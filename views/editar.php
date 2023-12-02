<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
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
        .boton {
            width: 100%;
            background: #1f53c5;
            border: none;
            padding: 12px;
        }
    </style>
    <nav class="navtop">
        <h1 style="color:white;">Sistema</h1>
        <a href="Tareas.php" style="color:white;"><i class="fas fa-user-circle"></i>Listado de tareas</a>
        <a href="perfil.php" style="color:white;"><i class="fas fa-user-circle"></i>Información de Usuario</a>
        <a href="cerrar-sesion.php" style="color:white;"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
    </nav>
<?php
$id = $_GET['id'];
$name = $_GET['name'];
$price = $_GET['price'];
?>
<section>
    <div class="content">
        <h2>Edición de productos</h2>
    </div>
    <div class="content">
		<form action="sp_editar.php" method="post" class="form-register">
			<table border="1"">
				<tr>
					<td>Actualizar datos:</td>
				</tr>
				<tr>
					<td>ID:</td>
					<td><input type="text" name="id" id="" value="<?=$id?>"></td>
				</tr>
				<tr>
					<td>NOMBRE:</td>
					<td><input type="text" name="name" id="" value="<?=$name?>"></td>
				</tr>
				<tr>
					<td>PRECIO:</td>
					<td><input type="text" name="precio" id="" value="<?=$price?>"></td>
				</tr>
                <tr>
				<td><input class="boton" type="submit" value="Guardar"></td>
                </tr>
			</table>
    	</form>
    </div>
</section>
</body>

</html>