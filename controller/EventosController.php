<!--AUTOR: Mora Villacis Christian Moises-->
<?php 
        if(!isset($_SESSION)) {session_start();}   
         
        if (!isset($_SESSION['rol_user']) || empty($_SESSION['rol_user']) || 
            ($_SESSION['rol_user'] != 3 && $_SESSION['rol_user'] != 2)) {// validacion de acceso segun rol de usuario
            $_SESSION['no_acceso']="Acceso Denegado. Usted no tiene los permisos necesarios para acceder a esta página";
            header("Location:index.php?p=login");
          die();
        }
?>

<?php
require_once 'model/dao/EventosDAO.php';
require_once 'model/dao/ClientesDAO.php';
require_once 'model/dao/OrganizadoresDAO.php';
require_once 'model/dao/LocacionesDAO.php';
require_once 'model/dto/Evento.php';
require_once 'controller/ServerController.php';

class EventosController {
    private $eventosDAO;

    public function __construct() {
        $this->eventosDAO = new EventosDAO();
    }

    public function index() {
        $eventos = $this->eventosDAO->selectAll("");
        $titulo = "Lista de Eventos";
        require_once VEVENTOS.'buscar.php';
    }

    public function search() {
        $titulo = "Buscar Eventos";
        $parametro = $_POST['buscar'];
        $eventos = $this->eventosDAO->selectAll($parametro);
        require_once VEVENTOS.'buscar.php';
    }

    public function view_new() {
        $modeloC = new ClienteDAO();
        $clientes = $modeloC->selectAll("");
        $modeloO = new OrganizadorDAO();
        $organizadores = $modeloO->selectAll("");
        $modeloL = new LocacionesDAO();
        $locaciones = $modeloL->selectAll("");
        $titulo = "Nuevo Evento";
        require_once VEVENTOS.'agregar.php';
    }

    public function new() {
        $postDatos = $_POST;
        $errores = validarEvento($postDatos);

        if(empty($errores)){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['txtNombre'])) {
                header('Location:index.php?c=eventos&f=index');
            }
            $eventos = new Evento();
            $eventos->setNombreEvento(htmlentities($_POST['txtNombre']));
            $eventos->setTipoEvento(htmlentities($_POST['txtTipoEvento']));
            $eventos->setIdCliente(htmlentities($_POST['txtIdCliente']));
            $eventos->setIdOrganizador(htmlentities($_POST['txtIdOrganizador']));
            $eventos->setIdLocacion(htmlentities($_POST['txtIdLocacion']));
            $fechaInicio = new DateTime($_POST['txtFechaInicio']);
            $fechaFin = new DateTime($_POST['txtFechaFin']);
            $eventos->setFechaInicioEvento($fechaInicio->format('Y-m-d H:i:s'));
            $eventos->setFechaFinEvento($fechaFin->format('Y-m-d H:i:s'));

            $exito = $this->eventosDAO->insert($eventos);

            $msj = 'Un nuevo evento ha sido registrado con éxito.';
            $color = 'success';
            if (!$exito) {
                $msj = "No se pudo registrar el evento.";
                $color = "danger";
            }
            if (!isset($_SESSION)) {
                session_start();
            };
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
            header('Location:index.php?c=eventos&f=index');
        }
    }else{//si hay errores, indicar que no se puede iniciar sesión por errores
        $_SESSION['alerta'] = $errores;
        header("Location:index.php?c=eventos&f=view_new");
        die();
    } 
    }

    public function view_edit(){
        $id = $_GET['id'];
        $titulo = "Editar Evento";
        $eventos = $this->eventosDAO->selectOne($id);
        $modeloC = new ClienteDAO();
        $clientes = $modeloC->selectAll("");
        $modeloO = new OrganizadorDAO();
        $organizadores = $modeloO->selectAll("");
        $modeloL = new LocacionesDAO();
        $locaciones = $modeloL->selectAll("");
        require_once VEVENTOS.'actualizar.php';
    }

    public function edit() {
        $postDatos = $_POST;
        $errores = validarEvento($postDatos);

        if(empty($errores)){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $eventos = new Evento();
            $eventos->setIdEvento(htmlentities($_POST['id']));
            $eventos->setNombreEvento(htmlentities($_POST['txtNombre']));
            $eventos->setTipoEvento(htmlentities($_POST['txtTipoEvento']));
            $eventos->setFechaInicioEvento(htmlentities($_POST['txtFechaInicio']));
            $eventos->setFechaFinEvento(htmlentities($_POST['txtFechaFin']));
            $eventos->setIdCliente(htmlentities($_POST['txtIdCliente']));
            $eventos->setIdOrganizador(htmlentities($_POST['txtIdOrganizador']));
            $eventos->setIdLocacion(htmlentities($_POST['txtIdLocacion']));

            $exito = $this->eventosDAO->update($eventos);

            $msj = 'El evento ha sido actualizado.';
            $color = 'success';
            if (!$exito) {
                $msj = "No se pudo actualizar el evento.";
                $color = "danger";
            }
            if (!isset($_SESSION)) {
                session_start();
            };
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
            header('Location:index.php?c=eventos&f=index');
        }
    }else{//si hay errores, indicar que no se puede iniciar sesión por errores
        $_SESSION['alerta'] = $errores;
        $idEvento = isset($eventos) ? $eventos->getId() : '';
        header("Location:index.php?c=eventos&f=view_edit&id={$postDatos['id']}");
        die();
    } 
    }

    public function delete() {
        // Obtener el ID del eventos desde la solicitud (GET, POST, etc.)
        $id = htmlentities($_GET['id']);
    
        // Crear un objeto eventos solo con el ID
        $eventos = new Evento();
        $eventos->setIdEvento($id);

    
        $exito = $this->eventosDAO->delete($eventos);
        
        $msj = 'El evento ha sido eliminado.';
        $color = 'success';
        if (!$exito) {
            $msj = "No se pudo eliminar el evento.";
            $color = "danger";
        }
        if (!isset($_SESSION)) {
            session_start();
        };
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;
    
        header('Location:index.php?c=eventos&f=index');
    }
}
?>
