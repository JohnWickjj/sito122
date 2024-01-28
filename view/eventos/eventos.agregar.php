<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="Mora Villacis Christian Moises">
        <title>Acceder a la cuenta/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="assets/css/stylesAgregar.css">
    </head>
    <body>

<div id="grancontenedor">
    <div>
        <h2 style="color:#0f4e81; font-size: 30px; margin-top: 25px;"><?php echo $titulo; ?></h2>
    </div>
    
    <div class="contenedor" style="border: 1px solid #3f5f7a;">
        <form action="index.php?c=eventos&f=new" method="POST" name="formAcceso" id="formAcceso">
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
                    <input type="text" id="nombres" name="txtNombre">
                </div>
                <div class="entradas">
                    <label for="tipoEvento">TIPO DE EVENTO:</label>
                    <select id="tipoEvento" name="txtTipoEvento" >                            
                        </option>
                        <option value=" ">--</option> 
                        <option value="QUINCEAÑERA">QUINCEAÑERA</option> 
                        <option value="FIESTA ADULTO">FIESTA ADULTO</option> 
                        <option value="FIESTA INFANTAL">FIESTA INFANTAL</option> 
                        <option value="ANIVERSARIO">ANIVERSARIO</option> 
                        <option value="GRADUACION">GRADUACION</option>  
                        <option value="MATRIMONIO">MATRIMONIO</option>  
                        <option value="CONFERENCIA">CONFERENCIA</option>  
                        <option value="EVENTO DEPORTIVO">EVENTO DEPORTIVO</option>  
                    </select>
                </div>
                <div class="entradas">
                    <label for="fechaInicio">FECHA DE INICIO:</label>
                    <input type="datetime-local" id="fechaInicio" name="txtFechaInicio">
                </div>
                <div class="entradas">
                    <label for="fechaFin">FECHA DE FIN:</label>
                    <input type="datetime-local" id="fechaFin" name="txtFechaFin" >
                </div>
                <div class="entradas">
                    <label for="idCliente">CLIENTE:</label>
                    <select id="idCliente" name="txtIdCliente">
                        <option value=" ">--</option>
                        
                       <?php $cliente; foreach ($clientes as $cliente) {
                            
                        ?>
                            <option value="<?php echo $cliente['id_cliente'] ?>">
                            <?php echo $cliente['nombre_cliente']; ?> <?php echo $cliente['apellido_cliente']; ?>
                            </option>

                        <?php
                        }
                        ?>   

                    </select>
                </div>
                
                <div class="entradas">
                    <label for="idOrganizador">ORGANIZADOR:</label>
                    <select id="idOrganizador" name="txtIdOrganizador">
                        <option value=" ">--</option>
                        
                       <?php foreach ($organizadores as $organizador) {
                            
                        ?>
                            <option value="<?php echo $organizador['id_organizador'] ?>">
                            <?php echo $organizador['nombre_organizador']; ?> <?php echo $organizador['apellido_organizador']; ?>
                            </option>

                        <?php
                        }
                        ?>   

                    </select>
                </div>
                <div class="entradas">
                    <label for="idLocacion">LOCACION:</label>
                    <select id="idLocacion" name="txtIdLocacion">
                        <option value=" ">--</option>
                        
                       <?php foreach ($locaciones as $locacion) {
                            
                        ?>
                            <option value="<?php echo $locacion->id_locacion ?>">
                            <?php echo $locacion->tipo_locacion . "''"  .  $locacion->nombre_locacion ."''"?>
                            </option>

                        <?php
                        }
                        ?>   

                    </select>
                </div>
            </div>
            <div id="grid2">
                <button type="submit" class="boton">Guardar</button>
                <a class="boton" href="index.php?c=eventos&f=index">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<!-- incluimos pie de pagina -->
<?php require_once FOOTER; ?>
