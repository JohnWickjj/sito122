<?php require_once HEADER; ?> 

<div class="container">
<?php
if(!isset($_SESSION)){
    session_start(); 
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="JANIS ODETH LARA JAMA">
        <title>Acceder a la cuenta/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="assets/css/sylesLogIn.css">
    </head>
    <body>
    
    <div id="grancontenedor">
        <?php 
            echo "<br><br>";
            if(!empty($_SESSION['no_acceso'])){ 
                echo "<div style='padding:3px; background-color:#ffbfaf; border:1px solid #FFB6A1;margin:auto;
                text-align:center; color:#BF2127; display: flex; align-items: center; justify-content:center; 
                max-width: 200px;border-radius: 5px;'>";    
                $mensaje = (!empty($_SESSION['no_acceso']))?htmlentities($_SESSION['no_acceso']):'';
                echo $mensaje; 
                $_SESSION['no_acceso'] = '';
                echo "</div>";
            }
        ?>
        <div>
            <h2 style="color:#0f4e81; font-size: 30px; margin-top: 25px;">BIENVENIDO AL LOG IN</h2>
        </div>

        <div class="contenedor" style="border: 1px solid #3f5f7a;">
            <form action="index.php?c=sesion&f=verificar" method="POST" id="formAcceso">
                <div class="grid" id="grid1"><!--Grid1-->
                    <div><!--Imagen de usuario-->
                        <img src="assets/images/usuario.png" alt="usuario" style="width: 100px;">
                    </div>
                    <div class="inicio"><!--Inicio-->
                        <label for="nombres">Iniciar sesión con</label>
                    </div>
                </div>

                <div class="grid" id="grid2"><!--Grid3-->
                    <div class="credenciales" style="text-align: center;">
                        <label style="margin-bottom: 15px" for="nombres"><b>Credenciales</b></label><!--Credenciales-->
                            <!--MENSAJE DE CAMPOS VACIOS-->
                        <?php 
                            if(!empty($_SESSION['alerta'])){ 
                                echo "<div style='padding:3px; background-color:#ffbfaf; border:1px solid #FFB6A1;margin:auto;
                                text-align:left; font-size: 15px;color:#BF2127; display: flex; align-items: center; justify-content:center; 
                                max-width: 400px;border-radius: 5px;'>";                        
                                echo "<ul style='list-style-type: disc;'>";
                                foreach ($_SESSION['alerta'] as $alerta) {
                                    echo "<li>- " . htmlentities($alerta)."</li>";
                                }
                                    echo "<ul>";
                                    unset($_SESSION['alerta']);
                                    echo "</div>";
                            }
                        ?>
                        <!--MENSAJE DE CREDENCIALES ERRONEAS-->
                        <?php 
                            echo "<br><br>";
                            if(!empty($_SESSION['mensaje'])){ 
                                echo "<div style='padding:3px; background-color:#ffbfaf; border:1px solid #FFB6A1;margin:auto;
                                text-align:center; font-size: 15px; color:#BF2127; display: flex; align-items: center; justify-content:center; 
                                max-width: 400px;border-radius: 5px;'>";
                                $mensaje = (!empty($_SESSION['mensaje']))?htmlentities($_SESSION['mensaje']):'';
                                echo $mensaje; 
                                $_SESSION['mensaje'] = '';
                                echo "</div>";
                            }
                        ?>
                   </div>
                      
                    <div class="entradas" id="input">
                        <div class="etiquetas" id="entrada1" style="width:90%">
                            <label for="usuario">Usuario:</label><!--Campo usuario-->
                            <input type="text" name="txtUsuario" id="usuario" placeholder="Escribe aquí"
                            value="<?php echo isset($_SESSION['nickname_user']) ? $_SESSION['nickname_user'] : ''; ?>"><!--Entrada usuario-->
                        </div>
                        <div class="etiquetas" id="entrada2" style="width:90%">
                            <label for="contrasena">Contraseña:</label><!--Campo contraseña-->
                            <input type="password" name="txtContrasena" id="contrasena" placeholder="Escribe aquí"><!--Entrada contraseña-->
                        </div>
                    </div>
                </div>

                <div class="grid" id="grid3"><!--Grid4-->
                    <div class="checks">
                        <label><!--Checkbox 1-->
                            <input type="checkbox" id="chbxContrasena" class="opciones" name="opcion1">Recordar contraseña 
                        </label>
                    </div>
                    <div class="checks">
                        <label><!--Checkbox 2-->
                            <input type="checkbox" id="chbxSesion" class="opciones" name="opciones2">Mantener sesión abierta
                        </label>
                    </div>
                    <div class="checks">
                        <label><!--Checkbox 3-->
                            <input type="checkbox" id="chbxTerminos" class="opciones" name="opciones3">Acepto los términos y condiciones 
                        </label>
                    </div>
                </div>
                        
                <div class="grid" id="grid4"><!--Grid5-->
                    <div>
                        <input class="boton" type="submit" value="Acceder">
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php require_once FOOTER; ?> 
 <script src="ValidarFormLogIn.js"></script>
    </body>
</html>