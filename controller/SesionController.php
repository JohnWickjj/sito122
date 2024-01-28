<!--AUTOR: Lara Jama Janis Odeth-->
<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once 'model/dao/UsuarioDAO.php';
require_once 'controller/ServerController.php';

class SesionController{
    private $model;
    
    public function __construct() {// constructor
        $this->model = new UsuarioDAO();
    }

public function verificar(){
    $postDatos = $_POST;
    $errores = validarFormulario($postDatos);

    if(empty($errores)){
        if(!empty($_POST['txtUsuario'])&&!empty($_POST['txtContrasena'])){
            $usuario = (!empty(clear_input($_POST['txtUsuario']))) ? htmlentities($_POST['txtUsuario']) : '';
            $contrasena = (!empty($_POST['txtContrasena'])) ? htmlentities($_POST['txtContrasena']) : '';
            $parametro1 = $usuario;
            $parametro2 = $contrasena;
            $resultados = $this->model->seleccion($parametro1, $parametro2);
            if (!empty($resultados)) {
                foreach($resultados as $resultado){
                if ($usuario == $resultado->nickname_user && $contrasena == $resultado->contrasenia_user) { // aqui se deberia consultar a la base de datos

                    $_SESSION['nickname_user'] = $usuario;
                    $_SESSION['contrasenia_user'] = $contrasena;
                    if($resultado->rol_user=='CLIENTE'){//cliente
                        $_SESSION['rol_user'] = 1;
                        $_SESSION['mi_rol'] = 'Cliente';
                        header("Location:index.php?c=index&f=index");
                        exit;
                    }else if($resultado->rol_user=='ORGANIZADOR'){//organizador
                        $_SESSION['rol_user'] = 2;
                        $_SESSION['mi_rol'] = 'Organizador';
                        header("Location:index.php?c=index&f=index");
                    exit;
                    }else if($resultado->rol_user=='ADMINISTRADOR'){//administrador
                        $_SESSION['rol_user'] = 3;
                        $_SESSION['mi_rol'] = 'Administrador';
                        header("Location:index.php?c=index&f=index");
                           exit;
                    }
                }else{
                    $_SESSION['mensaje'] = "Usuario y/o contrasena incorrecta.";
                    $_SESSION['color'] = "danger";
                    header("Location:index.php?p=login");
                    die();
                } 
            }
            }else{
                $_SESSION['mensaje'] = "Error en la consulta";
                $_SESSION['color'] = "danger";
                header("Location:index.php?p=login");
                die();
            }
        }
    }else{//si hay errores, indicar que no se puede iniciar sesión por errores
        $_SESSION['alerta'] = $errores;
        $_SESSION['color'] = "danger";
        header("Location:index.php?p=login");
        die();
    }
}

public function cerrar_sesion(){
    $opcion = (!empty($_GET['op'])) ? htmlentities($_GET['op']) : '';
    if($opcion == "cerrar"){
        session_unset();
        session_destroy();
        header("Location:index.php?p=login");
        die();
    }
}
}
?>

