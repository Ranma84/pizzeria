<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?=  BASE_URL ; ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pedido
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=  BASE_URL ; ?>/index.php?controller=PedidoController&action=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Añadir</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=  BASE_URL ; ?>/index.php?controller=PedidoController&action=store" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>