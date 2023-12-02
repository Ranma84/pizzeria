<!-- producto_agregado.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto Agregado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #007bff;
        }
        strong {
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Producto Agregado</h2>
        <p><strong>Nombre:</strong> <?php echo $_GET['nombre']; ?></p>
        <p><strong>Descripción:</strong> <?php echo $_GET['descripcion']; ?></p>
        <p><strong>Precio:</strong> <?php echo $_GET['precio']; ?></p>
        <a href="ingreso_productos.php" class="btn btn-primary">Volver a ingresar otro producto</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
