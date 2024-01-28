<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="Lara Jama Janis Odeth">
        <title>Acceder a la cuenta/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="assets/css/stylesAgregar.css">
    </head>
    <body>

<div id="grancontenedor">
    <div>
        <h2 style="color:#0f4e81; font-size: 30px; margin-top: 25px;"><?php echo $titulo; ?></h2>
    </div>
    
    <div class="contenedor" style="border: 1px solid #3f5f7a;">
        <form action="index.php?c=usuarios&f=new" method="POST" name="formAcceso" id="formAcceso">
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

            <div class="grid" id="grid1">
                <div class="entradas">
                    <label for="nombre">NOMBRE:</label>
                    <input  type="text" id="nombres" name="txtNombre">
                </div>
                <div class="entradas">
                    <label for="apellido">APELLIDO:</label>
                    <input type="text" id="apellido" name="txtApellido">
                </div>
                <div class="entradas">
                    <label for="prov_ciu">USUARIO:</label>
                    <input type="text" id="prov_ciu" name="txtUsuario">
                </div>
                <div class="entradas">
                    <label for="correo">CONTRASEÑA:</label>
                    <input type="text" id="correo" name="txtContrasenia">
                </div>
                <div class="entradas">
                    <label for="id_user">ROL:</label>
                    <select id="id_user" name="txtRol">
                        <option value=" ">--</option>
                        <option value="CLIENTE">CLIENTE</option>
                        <option value="ORGANIZADOR">ORGANIZADOR</option>
                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>                   
                    </select>
                </div>
            </div>
            <div id="grid2">
                <button type="submit" class="boton">Guardar</button>
                <a class="boton" href="index.php?c=usuarios&f=index">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php require_once FOOTER; ?>