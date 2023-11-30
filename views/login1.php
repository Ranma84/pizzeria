<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<?php if (isset($error)): ?>
    <p style="color: red;"><?= $error; ?></p>
<?php endif; ?>

<form action="<?=  BASE_URL . 'login/login'; ?>" method="post">
    <label for="username">Usuario:</label>
    <input type="text" name="username" required>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" required>
    <button type="submit">Iniciar sesión</button>
</form>

</body>
</html>
