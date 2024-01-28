<!--AUTOR: Cueva Tumbaco Jhon Jairo-->
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
require_once 'model/dao/LocacionesDAO.php';
require_once 'model/dto/Locacion.php';
require_once 'controller/ServerController.php';

class LocacionesController {
    // Función para mostrar la lista de locaciones
    private $locacionesDAO;

    public function __construct() {// constructor
        $this->locacionesDAO = new LocacionesDAO();
    }

    public function index() {
        $locaciones = $this->locacionesDAO->selectAll("");
        $titulo = "Lista de Locaciones";
        require_once VLOCACIONES.'buscar.php';
    }

    // Función para buscar locaciones
    public function search() {
        $titulo = "Buscar Locaciones";
        $parametro = $_POST['buscar'];
        $locaciones = $this->locacionesDAO->selectAll($parametro);

        require_once VLOCACIONES.'buscar.php';
    }
    
    public function view_new() {
        $titulo = "Nueva Locacion";
        require_once VLOCACIONES.'agregar.php.';
    }

    // Función para guardar un nuevo organizador
     public function new() {
        $postDatos = $_POST;
        $errores = validarLocacion($postDatos);

        if(empty($errores)){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {// insertar el producto
            // considerar verificaciones
            if(empty($_POST['txtNombre'])){   header('Location:index.php?c=locaciones&f=index'); }
            $locaciones = new Locacion(); // dto
            // lectura de parametros
            $locaciones->setNombre(htmlentities($_POST['txtNombre']));
            $locaciones->setTipo(htmlentities($_POST['txtTipo']));
            $locaciones->setUbicacion(htmlentities($_POST['txtUbicacion']));
            $locaciones->setCapacidad(htmlentities($_POST['txtCapacidad']));
            if (isset($_POST['Equipamento']) && is_array($_POST['Equipamento'])) {
                $locaciones->setEquipamento($_POST['Equipamento']);
            } 
              
            $exito = $this->locacionesDAO->insert($locaciones);

            $msj = 'Una nueva locacion ha sido registrada con éxito.';
            $color = 'success';
            if (!$exito) {
                $msj = "No se pudo registrar la locacion.";
                $color = "danger";
            }
            if (!isset($_SESSION)) {
                session_start();
            };
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
            //llamar a la vista
            
           header('Location:index.php?c=locaciones&f=index');// redireccionamiento

        } 
    }else{//si hay errores, indicar que no se puede iniciar sesión por errores
        $_SESSION['alerta'] = $errores;
        header("Location:index.php?c=locaciones&f=view_new");
        die();
    } 
    }

    // Función para mostrar el formulario de editar locacionese
    public function view_edit(){
        $id= $_GET['id'];
        $titulo = "Editar Locacion";
        // Obtener los datos del locacionese por su ID
        $locaciones = $this->locacionesDAO->selectOne($id);

        require_once VLOCACIONES.'actualizar.php';
    }

    // Función para guardar cambios en un locacionese
    public function edit() {
        $postDatos = $_POST;
        $errores = validarLocacion($postDatos);

        if(empty($errores)){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $locaciones = new Locacion(); // dto
            // lectura de parametros
            $locaciones->setId(htmlentities($_POST['id']));
            $locaciones->setNombre(htmlentities($_POST['txtNombre']));
            $locaciones->setTipo(htmlentities($_POST['txtTipo']));
            $locaciones->setUbicacion(htmlentities($_POST['txtUbicacion']));
            $locaciones->setCapacidad(htmlentities($_POST['txtCapacidad']));
            if (isset($_POST['Equipamento']) && is_array($_POST['Equipamento'])) {
                $locaciones->setEquipamento($_POST['Equipamento']);
            } else {
                $locaciones->setEquipamento(["Sin equipamento"]);
            }
            
            $exito = $this->locacionesDAO->update($locaciones);
  
            $msj = 'La locacion ha sido actualizado.';
            $color = 'success';
            if (!$exito) {
                $msj = "No se pudo actualizar la locacion.";
                $color = "danger";
            }
            if (!isset($_SESSION)) {
                session_start();
            };
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
            //llamar a la vista
           header('Location:index.php?c=locaciones&f=index');// redireccionamiento
        } 
    }else{//si hay errores, indicar que no se puede iniciar sesión por errores
        $_SESSION['alerta'] = $errores;
        $idLocacion = isset($locaciones) ? $locaciones->getId() : '';
        header("Location:index.php?c=locaciones&f=view_edit&id={$postDatos['id']}");
        die();
    } 
    }

    public function delete() {
        // Obtener el ID del locacionese desde la solicitud (GET, POST, etc.)
        $id = htmlentities($_GET['id']);
    
        // Crear un objeto locacionese solo con el ID
        $locaciones = new Locacion(); // dto
        $locaciones->setId($id);
    
        $exito = $this->locacionesDAO->delete($locaciones);

        $msj = 'La locacion ha sido eliminado.';
        $color = 'success';
        if (!$exito) {
            $msj = "No se pudo eliminar la locacion.";
            $color = "danger";
        }
        if (!isset($_SESSION)) {
            session_start();
        };
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;
    
        header('Location:index.php?c=locaciones&f=index');
    }

}
?>
