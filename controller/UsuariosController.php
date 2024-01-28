<!--AUTOR: Lara Jama Janis Odeth-->
<?php 
        if(!isset($_SESSION)) {session_start();}   
         
        if (!isset($_SESSION['rol_user']) || empty($_SESSION['rol_user']) || 
            ($_SESSION['rol_user'] != 3)) {// validacion de acceso segun rol de usuario
            $_SESSION['no_acceso']="Acceso Denegado. Usted no tiene los permisos necesarios para acceder a esta página";
            header("Location:index.php?p=login");
          die();
        }
?>

<?php
require_once 'model/dao/UsuarioDAO.php';
require_once 'model/dto/Usuario.php';
require_once 'controller/ServerController.php';

class UsuariosController {
    // Función para mostrar la lista de usuario
    private $usuarioDAO;

    public function __construct() {// constructor
        $this->usuarioDAO = new UsuarioDAO();
    }

    public function index() {

        $usuarios = $this->usuarioDAO->selectAll("");
        $titulo = "Lista de Usuarios";
        require_once VUSUARIO.'buscar.php';

    }

    // Función para buscar usuario
    public function search() {
        $titulo = "Buscar Usuarios";
        $parametro = $_POST['buscar'];
        $usuarios = $this->usuarioDAO->selectAll($parametro);

        require_once VUSUARIO.'buscar.php';
    }
    
    public function view_new() {
        $modeloUser = new UsuarioDAO();
        $usuarios = $modeloUser->selectAll("");
        $titulo = "Nuevo Usuario";
        require_once VUSUARIO.'agregar.php.';
    }

    // Función para guardar un nuevo usuarios
     public function new() {
        $postDatos = $_POST;
        $errores = validarUsuario($postDatos);

        if(empty($errores)){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// insertar el producto
            // considerar verificaciones
            if(empty($_POST['txtNombre'])){   header('Location:index.php?c=usuario&f=index'); }
            $usuarios = new Usuario(); // dto
            // lectura de parametros
            $usuarios->setNombre(htmlentities($_POST['txtNombre']));
            $usuarios->setApellido(htmlentities($_POST['txtApellido']));
            $usuarios->setUsuario(htmlentities($_POST['txtUsuario']));
            $usuarios->setContrasenia(htmlentities($_POST['txtContrasenia']));
            $usuarios->setRol(htmlentities($_POST['txtRol']));
              
            $exito = $this->usuarioDAO->insert($usuarios);

            $msj = 'Un nuevo usuario ha sido registrado con éxito.';
            $color = 'success';
            if (!$exito) {
                $msj = "No se pudo registrar el usuario.";
                $color = "danger";
            }
            if (!isset($_SESSION)) {
                session_start();
            };
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
            //llamar a la vista
           header('Location:index.php?c=usuarios&f=index');// redireccionamiento

        }
    }else{//si hay errores, indicar que no se puede iniciar sesión por errores
        $_SESSION['alerta'] = $errores;
        header("Location:index.php?c=usuarios&f=view_new");
        die();
    } 
    }

    // Función para mostrar el formulario de editar usuarios
    public function view_edit(){
        $id= $_GET['id'];
        $titulo = "Editar Usuario";
        // Obtener los datos del usuariose por su ID
        $usuarios = $this->usuarioDAO->selectOne($id);

        require_once VUSUARIO.'actualizar.php';
    }

    // Función para guardar cambios en un usuariose
    public function edit() {
        $postDatos = $_POST;
        $errores = validarUsuario($postDatos);

        if(empty($errores)){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $usuarios = new Usuario();
            $usuarios->setId(htmlentities($_POST['id']));
            $usuarios->setNombre(htmlentities($_POST['txtNombre']));
            $usuarios->setApellido(htmlentities($_POST['txtApellido']));
            $usuarios->setUsuario(htmlentities($_POST['txtUsuario']));
            $usuarios->setContrasenia(htmlentities($_POST['txtContrasenia']));
            $usuarios->setRol(htmlentities($_POST['txtRol']));
            
            $exito = $this->usuarioDAO->update($usuarios);
  
            $msj = 'El usuario ha sido actualizado.';
            $color = 'success';
            if (!$exito) {
                $msj = "No se pudo actualizar el usuario.";
                $color = "danger";
            }
            if (!isset($_SESSION)) {
                session_start();
            };
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
            //llamar a la vista
           header('Location:index.php?c=usuarios&f=index');// redireccionamiento
        }
    }else{//si hay errores, indicar que no se puede iniciar sesión por errores
        $_SESSION['alerta'] = $errores;
        $idUsuario = isset($usuarios) ? $usuarios->getId() : '';
        header("Location:index.php?c=usuarios&f=view_edit&id={$postDatos['id']}");
        die();
    } 
    }

    public function delete() {
        // Obtener el ID del cliente desde la solicitud (GET, POST, etc.)
        $id = htmlentities($_GET['id']);
    
        // Crear un objeto Cliente solo con el ID
        $usuarios = new Usuario();
        $usuarios->setId($id);
    
        $exito = $this->usuarioDAO->delete($usuarios);
        
        $msj = 'El usuario ha sido eliminado.';
        $color = 'success';
        if (!$exito) {
            $msj = "No se pudo eliminar el usuario.";
            $color = "danger";
        }
        if (!isset($_SESSION)) {
            session_start();
        };
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;
    
        header('Location:index.php?c=usuarios&f=index');
    }

}
?>