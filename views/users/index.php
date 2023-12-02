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
            <h1>Lista de Usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
              <li class="breadcrumb-item active">Lista</li>
            </ol>
          </div>
        </div>
      </div>
    </section>


    <section class="content">
      <div class="container-fluid">
      <div class="box-tools">
                    <a href="<?=  BASE_URL ; ?>index.php?controller=UserController&action=create" class="btn btn-success btn-sm">Agregar</a> 
              </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Usuarios</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tabla" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>ROL</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    <?php foreach ($users as $clave => $valor){
                     ?> 
                     <tr>
                     <td><?= $valor['id'] ?></td> 
                     <td><?= $valor['username'] ?></td>
                     <td><?= $valor['name'] ?></td>
                     <td>
                        <a href="<?=  BASE_URL ; ?>index.php?controller=UserController&action=show&userId=<?= $valor['id'] ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                        <a href="<?=  BASE_URL ; ?>index.php?controller=UserController&action=delete&userId=<?= $valor['id'] ?>"" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
                      </td>
                      </tr>
                     <?php    
                    }
                    ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 <?php include('views/part/footer.php'); ?>