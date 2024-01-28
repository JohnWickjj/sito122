<!--AUTOR: Aviles Romero Gino Alexander-->
<?php 
        if(!isset($_SESSION)) {session_start();}   
         
        if (!isset($_SESSION['rol_user']) || empty($_SESSION['rol_user']) || 
            ($_SESSION['rol_user'] != 3 && $_SESSION['rol_user'] != 2)) {// validacion de acceso segun rol de usuario
            header("Location:index.php?p=login");
          die();
        }
?>

<?php
require_once 'model/dao/ClientesDAO.php';
require_once 'model/dao/UsuarioDAO.php';
require_once 'model/dto/Cliente.php';
require_once 'controller/ServerController.php';

class ClientesController {
    // Función para mostrar la lista de clientes
    private $clienteDAO;

    public function __construct() {// constructor
        $this->clienteDAO = new ClienteDAO();
    }

    public function index() {
        $clientes = $this->clienteDAO->selectAll("");
        $titulo = "Lista de Clientes";
        require_once VCLIENTES.'buscar.php';

    }

    // Función para buscar clientes
    public function search() {
        $titulo = "Buscar Clientes";
        $parametro = $_POST['buscar'];
        $clientes = $this->clienteDAO->selectAll($parametro);

        require_once VCLIENTES.'buscar.php';
    }
    
    public function view_new() {
        $modeloUser = new UsuarioDAO();
        $usuarios = $modeloUser->selectAll("");
        $titulo = "Nuevo Cliente";
        require_once VCLIENTES.'agregar.php.';
    }

    // Función para guardar un nuevo cliente
     public function new() {
        $postDatos = $_POST;
        $errores = validarCliente($postDatos);

        if(empty($errores)){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// insertar el producto
            // considerar verificaciones
            $client = new Cliente(); // dto
            // lectura de parametros
            $client->setNombre(htmlentities($_POST['txtNombre']));
            $client->setApellido(htmlentities($_POST['txtApellido']));
            $client->setProvCiu(htmlentities($_POST['txtPronvincia']));
            $client->setCorreo(htmlentities($_POST['txtCorreo']));
            $client->setTelefono(htmlentities($_POST['txtTelefono']));
            $client->setIdUser(htmlentities($_POST['txtIdUserCli']));
              
            $exito = $this->clienteDAO->insert($client);

            $msj = 'Un nuevo cliente ha sido registrado con éxito.';
            $color = 'success';
            if (!$exito) {
                $msj = "No se pudo registrar el cliente.";
                $color = "danger";
            }
            if (!isset($_SESSION)) {
                session_start();
            };
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
            //llamar a la vista
           header('Location:index.php?c=clientes&f=index');// redireccionamiento

        }
    }else{//si hay errores, indicar que no se puede iniciar sesión por errores
        $_SESSION['alerta'] = $errores;
        header("Location:index.php?c=clientes&f=view_new");
        die();
    } 
    }

    // Función para mostrar el formulario de editar cliente
    public function view_edit(){
        $id= $_GET['id'];
        $titulo = "Editar Cliente";
        // Obtener los datos del cliente por su ID
        $cliente = $this->clienteDAO->selectOne($id);
        $modeloUser = new UsuarioDAO();
        $usuarios = $modeloUser->selectAll("");

        require_once VCLIENTES.'actualizar.php';
    }

    // Función para guardar cambios en un cliente
    public function edit() {
        $postDatos = $_POST;
        $errores = validarCliente($postDatos);

        if(empty($errores)){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $client = new Cliente();
            $client->setId(htmlentities($_POST['id']));
            $client->setNombre(htmlentities($_POST['txtNombre']));
            $client->setApellido(htmlentities($_POST['txtApellido']));
            $client->setProvCiu(htmlentities($_POST['txtProvincia']));
            $client->setCorreo(htmlentities($_POST['txtCorreo']));
            $client->setTelefono(htmlentities($_POST['txtTelefono']));
            $client->setIdUser(htmlentities($_POST['txtIdUserCli']));
            
            $exito = $this->clienteDAO->update($client);
  
            $msj = 'El cliente ha sido actualizado.';
            $color = 'success';
            if (!$exito) {
                $msj = "No se pudo actualizar el cliente.";
                $color = "danger";
            }
            if (!isset($_SESSION)) {
                session_start();
            };
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
            //llamar a la vista
           header('Location:index.php?c=clientes&f=index');// redireccionamiento
        } 
    }else{//si hay errores, indicar que no se puede iniciar sesión por errores
        $_SESSION['alerta'] = $errores;
        $idCliente = isset($client) ? $client->getId() : '';
        header("Location:index.php?c=clientes&f=view_edit&id={$postDatos['id']}");
        die();
    } 
    }

    public function delete() {
        // Obtener el ID del cliente desde la solicitud (GET, POST, etc.)
        $id = htmlentities($_GET['id']);
    
        // Crear un objeto Cliente solo con el ID
        $client = new Cliente();
        $client->setId($id);
    
        $exito = $this->clienteDAO->delete($client);

        $msj = 'El cliente ha sido eliminado.';
        $color = 'success';
        if (!$exito) {
            $msj = "No se pudo eliminar el cliente.";
            $color = "danger";
        }
        if (!isset($_SESSION)) {
            session_start();
        };
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;
    
        header('Location:index.php?c=clientes&f=index');
    }

}
?>
