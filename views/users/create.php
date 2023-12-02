<?php include('views/part/head.php'); ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php include('views/part/menu_nav_admin.php'); ?>
  
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PIZZA</span>
    </a>

    <div class="sidebar">
      <?php include('views/part/menu_admin.php'); ?>
    </div>
  </aside>


<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Creacion de Usuario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Usuario</a></li>
              <li class="breadcrumb-item active">Creacion</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">CRUD <small>Usuario</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="CreateUsuario" action="<?=  BASE_URL ; ?>index.php?controller=UserController&action=store" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Ingresa Usuario" required >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required >
                  </div>
              
                  <div class="form-group">
						<label for="role_id" class="control-label">Role</label>
						<div class="form-group">
							<select name="role_id" class="form-control">
								<option value="">seleccionar rol</option>
								<?php 
								foreach($all_roles as $role)
								{
									echo '<option value="'.$role['id'].'" >'.$role['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


</div>
 <?php include('views/part/footer.php');  ?>