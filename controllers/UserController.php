<?php

class UserController
{
    private $userModel;

    public function __construct()
    {
        require_once 'modelo/User_model.php';
        $this->userModel = new User_model();
      
    }

    public function index()
    {
        $users = $this->userModel->getAllUsers();
       
        $js=array('asset/plugins/datatables/jquery.dataTables.min.js',
        'asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
        'asset/plugins/datatables-responsive/js/dataTables.responsive.min.js',
        'asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js',
        'asset/plugins/datatables-buttons/js/dataTables.buttons.min.js',
        'asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js',
        'asset/plugins/jszip/jszip.min.js',
        'asset/plugins/pdfmake/pdfmake.min.js',
        'asset/plugins/pdfmake/vfs_fonts.js',
        'asset/plugins/datatables-buttons/js/buttons.html5.min.js',
        'asset/plugins/datatables-buttons/js/buttons.print.min.js',
        'asset/plugins/datatables-buttons/js/buttons.colVis.min.js',
        'asset/js/tabla.js');

        $css=array('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',
    'asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
'asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');

        include 'views/users/index.php';
    }

    public function show($userId)
    {
        $user = $this->userModel->getUserById($userId);
        $all_roles = $this->userModel->getAllRol();
        include 'views/users/show.php';
    }

    public function create()
    {
        $all_roles = $this->userModel->getAllRol();
        include 'views/users/create.php';
    }

    public function store()
    {
        // Validar y procesar el formulario de creación
        $userData = [
            'username' => trim($_POST['username']),
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'role_id' => $_POST['role_id']
        ];

        $this->userModel->insertUser($userData);
        header('Location: index.php?controller=UserController');
    }


    public function update($userId)
    {
        $userData = null;
        if(isset($_POST['password']) && !empty($_POST['password'])){ 
            $userData = [
                'username' => $_POST['username'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'role_id' => $_POST['role_id']
            ];
        }
        else{
            $userData = [
                'username' => $_POST['username'],
                'role_id' => $_POST['role_id']
            ];
        }
        $this->userModel->updateUser($userId, $userData);
        header('Location: index.php?controller=UserController');
    }

    public function delete($userId)
    {
        $this->userModel->deleteUser($userId);
        header('Location: index.php?controller=UserController');
    }
}

// Crea una instancia del controlador
$userController = new UserController();

// Decide la acción basada en la solicitud del usuario
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// ID de la clase
$userId = isset($_GET['userId']) ? $_GET['userId'] : '';

// Ejecuta la acción correspondiente
if (method_exists($userController, $action)) {
    $userController->$action($userId);
} else {
    // Maneja acciones no válidas
    echo 'Acción no válida';
}