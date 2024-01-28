<?php  
if (!isset($_SESSION))  session_start();
        
if(empty($_SESSION['user'])){ //simulacion manejo de variables de sesion
     // redireccionar al login
}
?>
<!-- parte inicial del documento-->
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="JANIS ODETH LARA JAMA">
        <title>Inicio/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="assets/css/syles.css">
    </head> 
    <body>
    <header style="background-color: #00415b;"><div><h1 id="nombre">Eventos Gino</h1><div></header>

    <?php
  

            echo "<div class='#sesion' style='margin-right: 350px; margin-top: 200px; backgorund-color: #0f4e81; text-align: right;'>";
            if(isset($_SESSION['nickname_user'])&&isset($_SESSION['mi_rol'])) {
              echo "<span><h1 style='color: #0f4e81;'>Bienvenido " . htmlentities($_SESSION['nickname_user']) ." </h1></span>";
              echo "<span><h2><i>Ha iniciado sesión como " .  htmlentities($_SESSION['mi_rol']) ." </i></h2></span><br>";
          }else{
            echo "<span><h1 style='color: #0f4e81;'>Bienvenido </h1></span>";
          }
            ?>
    
        <span><h2><i><a style="" href='index.php?c=sesion&f=cerrar_sesion&op=cerrar&num=12'><h3>Cerrar sesion</h3></a></i></h2></span><br>";
        <?php echo "</div>"; ?>
        <?php
        $ruta="";
        if($_SERVER['PHP_SELF']!="index.php"){
            $ruta="../";
        }
        ?>

    <nav class="navegacion">
    
     <ul class="nav">
     <li class="menu"><a href="index.php">Home</a>
            <ul>
                <li class="submenu"><a href="index.php?p=login">Acceder a cuenta</a></li>
                <li class="submenu"><a href="index.php?p=servicios">Cotizar Eventos</a></li>
                <li class="submenu"><a href="index.php?p=espacios">Buscar Espacios</a></li>
            </ul>
        </li>
        <li class="menu"><a href="index.php?p=servicios">Servicios</a>
          <ul>
            <li class="submenu"><a href="index.php?p=cotizar_form">Cotizar</a></li>
          </ul>
        </li>
        <li class="menu"><a href="index.php?p=espacios">Espacios</a>
          <ul>
              <li class="submenu"><a href="index.php?p=espacios_form">Buscar espacios</a></li>
          </ul>
        </li>
        <li class="menu"><a href="index.php?p=blog">Blog</a>
            <ul>
                <li class="submenu"><a href="index.php?p=suscribirse_form">Suscribirse</a></li>
            </ul>
        </li>
        <li class="menu"><a href="index.php?p=nosotros">Sobre Nosotros</a>
            <ul>
                <li class="submenu"><a href="index.php?p=postulaciones_form">Formulario para trabajar con nosotros</a></li>
            </ul>
        </li>

     <?php if(isset($_SESSION['rol_user']) && isset($_SESSION['mi_rol'])) {
            $rol = $_SESSION['rol_user'];
            $mi_rol = $_SESSION['mi_rol'];

            if($rol == 1 && $mi_rol == 'Cliente') { 
              $_SESSION['no_acceso']="Acceso Denegado. Usted como cliente
              no tiene los permisos necesarios para acceder a esta página";
              ?>
                    
      <?php
      }else if($rol == 2 && $mi_rol == 'Organizador') { ?>
            <li class="menu"><a href="index.php?c=clientes&f=index">Clientes</a>
            </li>
            <li class="menu"><a href="index.php?c=eventos&f=index">Eventos</a>
            </li>
        
        <?php
    }else if($rol == 3 && $mi_rol == 'Administrador'){ ?>
          <li class="menu"><a href="index.php?c=usuarios&f=index">Usuarios</a>
          </li>
          <li class="menu"><a href="index.php?c=clientes&f=index">Clientes</a>
          </li>
          <li class="menu"><a href="index.php?c=organizadores&f=index">Organizadores</a>
          </li>
          <li class="menu"><a href="index.php?c=eventos&f=index">Eventos</a>
          </li>
          <li class="menu"><a href="index.php?c=locaciones&f=index">Locaciones</a>
          </li>
     
      <?php
  
}
}
?>
</ul>
  
      
        </nav>
        <?php
       
        



        