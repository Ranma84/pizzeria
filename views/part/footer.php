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