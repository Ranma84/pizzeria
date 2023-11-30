<?php include('views/part/head.php'); ?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicia sesión</p>

      <?php if (isset($error)): ?>
        <p style="color: red;"><?= $error; ?></p>
      <?php endif; ?>

      <form action="<?=  BASE_URL . 'login/login'; ?>" method="post">
        <div class="input-group mb-3">
          <input required type="text" class="form-control" placeholder="Usuario" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input required type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include('views/part/footer.php'); ?>

