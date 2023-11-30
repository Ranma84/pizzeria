<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>

<h1>Listado de Usuarios</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre de Usuario</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['username']; ?></td>
            </tr>
        <?php endforeach; 
        unset($users,$user);
        ?>        
    </tbody>
</table>
</body>
</html>