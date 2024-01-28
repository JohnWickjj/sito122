<!--AUTOR: Burgos Holguin David Alfredo-->
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
require_once 'model/dao/OrganizadoresDAO.php';
require_once 'model/dao/UsuarioDAO.php';
require_once 'model/dto/Organizador.php';
require_once 'controller/ServerController.php';


class OrganizadoresController {
    // Función para mostrar la lista de organizadores
    private $organizadorDAO;

    public function __construct() {// constructor
        $this->organizadorDAO = new OrganizadorDAO();
    }

    public function index() {
        $organizadores = $this->organizadorDAO->selectAll("");
        $titulo = "Lista de Organizadores";
        require_once VORGANIZADOR.'buscar.php';

    }

    // Función para buscar organizadores
    public function search() {
        $titulo = "Buscar Organizadores";
        $parametro = $_POST['buscar'];
        $organizadores = $this->organizadorDAO->selectAll($parametro);

        require_once VORGANIZADOR.'buscar.php';
    }
    
    public function view_new() {
        $modeloUser = new UsuarioDAO();
        $usuarios = $modeloUser->selectAll("");
        $titulo = "Nuevo Organizador";
        require_once VORGANIZADOR.'agregar.php.';
    }

    // Función para guardar un nuevo organizador
     public function new() {
        $postDatos = $_POST;
        $errores = validarOrganizador($postDatos);

        if(empty($errores)){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// insertar el producto
            // considerar verificaciones
            if(empty($_POST['txtNombre'])){   header('Location:index.php?c=organizadores&f=index'); }
            $organizadores = new Organizador(); // dto
            // lectura de parametros
            $organizadores->setNombre(htmlentities($_POST['txtNombre']));
            $organizadores->setApellido(htmlentities($_POST['txtApellido']));
            $organizadores->setCorreo(htmlentities($_POST['txtCorreo']));
            $organizadores->setTelefono(htmlentities($_POST['txtTelefono']));
            $organizadores->setIdUser(htmlentities($_POST['txtIdUserOrg']));
              
            $exito = $this->organizadorDAO->insert($organizadores);

            $msj = 'Un nuevo organizador ha sido registrado con éxito.';
            $color = 'success';
            if (!$exito) {
                $msj = "No se pudo registrar el organizador.";
                $color = "danger";
            }
            if (!isset($_SESSION)) {
                session_start();
            };
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
            //llamar a la vista
           header('Location:index.php?c=organizadores&f=index');// redireccionamiento

        } 
    }else{//si hay errores, indicar que no se puede iniciar sesión por errores
            $_SESSION['alerta'] = $errores;
            header("Location:index.php?c=organizadores&f=view_new");
            die();
        } 
    }

    // Función para mostrar el formulario de editar organizadorese
    public function view_edit(){
        $id= $_GET['id'];
        $titulo = "Editar Organizador";
        // Obtener los datos del organizadorese por su ID
        $organizadores = $this->organizadorDAO->selectOne($id);
        $modeloUser = new UsuarioDAO();
        $usuarios = $modeloUser->selectAll("");

        require_once VORGANIZADOR.'actualizar.php';
    }

    // Función para guardar cambios en un organizadorese
    public function edit() {
        $postDatos = $_POST;
        $errores = validarOrganizador($postDatos);

        if(empty($errores)){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $organizadores = new Organizador(); // dto
            $organizadores->setId(htmlentities($_POST['id']));
            $organizadores->setNombre(htmlentities($_POST['txtNombre']));
            $organizadores->setApellido(htmlentities($_POST['txtApellido']));
            $organizadores->setCorreo(htmlentities($_POST['txtCorreo']));
            $organizadores->setTelefono(htmlentities($_POST['txtTelefono']));
            $organizadores->setIdUser(htmlentities($_POST['txtIdUserOrg']));
            
            $exito = $this->organizadorDAO->update($organizadores);
  
            $msj = 'El organizador ha sido actualizado.';
            $color = 'success';
            if (!$exito) {
                $msj = "No se pudo actualizar el organizador.";
                $color = "danger";
            }
            if (!isset($_SESSION)) {
                session_start();
            };
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
            //llamar a la vista
           header('Location:index.php?c=organizadores&f=index');// redireccionamiento
        } 
    }else{//si hay errores, indicar que no se puede iniciar sesión por errores
        $_SESSION['alerta'] = $errores;
        $idOrganizador = isset($organizadores) ? $organizadores->getId() : '';
        header("Location:index.php?c=organizadores&f=view_edit&id={$postDatos['id']}");
        die();
    } 
    }

    public function delete() {
        $id = htmlentities($_GET['id']);
    
        // Crear un objeto organizadorese solo con el ID
        $organizadores = new Organizador(); // dto
        $organizadores->setId($id);
    
        $exito = $this->organizadorDAO->delete($organizadores);

        $msj = 'El organizador ha sido eliminado.';
        $color = 'success';
        if (!$exito) {
            $msj = "No se pudo eliminar el organizador.";
            $color = "danger";
        }
        if (!isset($_SESSION)) {
            session_start();
        };
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;
    
        header('Location:index.php?c=organizadores&f=index');
    }

}
?>
