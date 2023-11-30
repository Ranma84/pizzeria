<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Biblioteca</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?=  BASE_URL . 'asset/plugins/fontawesome-free/css/all.min.css'; ?>">
  <link rel="stylesheet" href="<?=  BASE_URL . 'asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css'; ?>">
  <link rel="stylesheet" href="<?=  BASE_URL . 'asset/css/adminlte.min.css'; ?>">

  <?php if (isset($css)): ?>
    <?php foreach ($css as $valor) { ?> 
            <link rel="stylesheet" href="<?= BASE_URL.$valor ?>">    
    <?php }   ?>       
  <?php endif; ?>
</head>