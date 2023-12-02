 <!-- /.content-wrapper -->
 <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1
    </div>
    <strong>Copyright &copy; 2023 <a href="#">PIZZERIA</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="<?=  BASE_URL . 'asset/plugins/jquery/jquery.min.js'; ?>"></script>
        <script src="<?=  BASE_URL . 'asset/plugins/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
        <script src="<?=  BASE_URL . 'asset/js/adminlte.min.js'; ?>"></script>
        <?php 
        if(isset($js))
        foreach ($js as $valor) { ?> 
            <script src="<?= BASE_URL.$valor ?>"></script>
        <?php }   ?>


    </body>
</html>