<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="Aviles Romero Gino Alexander">
        <title>Actualizar cliente/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="assets/css/stylesAgregar.css">
        <style>
            #grid1{
                display: grid;
                grid-template-columns: 100%;
                grid-template-rows: 40px 40px 40px 40px 40px;
                row-gap: 15px;
                margin-bottom: 25px;
                justify-items: center;
            }
        </style>
    </head>
    <body>

<div id="grancontenedor">
    <div>
        <h2 style="color:#0f4e81; font-size: 30px; margin-top: 25px;"><?php echo $titulo; ?></h2>
    </div>
    
    <div class="contenedor" style="border: 1px solid #3f5f7a;">
        <form action="index.php?c=clientes&f=edit" method="POST" name="formAcceso" id="formAcceso">
            <input type="hidden" name="id" id="id" value="<?php echo $cliente['id_cliente']; ?>"/>
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
                    <input type="text" id="nombres" name="txtNombre" 
                    value="<?php echo $cliente['nombre_cliente']; ?>">
                </div>
                <div class="entradas">
                    <label for="apellido">APELLIDO:</label>
                    <input type="text" id="apellido" name="txtApellido" 
                    value="<?php echo $cliente['apellido_cliente']; ?>">
                </div>
                <div class="entradas">
                    <label for="prov_ciu">PROVINCIA/CIUDAD:</label>
                    <input type="text" id="prov_ciu" name="txtProvincia"  
                    value="<?php echo $cliente['prov_ciu_cliente']; ?>">
                </div>
                <div class="entradas">
                    <label for="correo">CORREO</label>
                    <input type="email" id="correo" name="txtCorreo" 
                    value="<?php echo $cliente['correo_cliente']; ?>">
                </div>
                <div class="entradas">
                    <label for="telefono">TELÉFONO</label>
                    <input type="text" id="telefono" name="txtTelefono" 
                    value="<?php echo $cliente['telefono_cliente']; ?>">
                </div>
                <div class="entradas">
                    <label for="id_user">USUARIO:</label>
                    <select id="id_user" name="txtIdUserCli">
                        <option value=" ">--</option>
                       <?php foreach ($usuarios as $user) {
                            if($user->rol_user=="CLIENTE"){
                                $selected='';
                                if($user->id_user == $cliente['cliente_id_user']){
                                    $selected='selected="selected"';
                              }
                        ?>
                            <option value="<?php echo $user->id_user ?>"<?php echo $selected; ?>>
                            <?php echo $user->nickname_user; ?>
                            </option>

                        <?php
                            }
                        }
                        ?>   

                    </select>
                </div>
            </div>
            <div id="grid2">
                <button type="submit" class="boton">Guardar</button>
                <a href="index.php?c=clientes&f=index" class="boton">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<!-- incluimos pie de pagina -->
<?php require_once FOOTER; ?>
