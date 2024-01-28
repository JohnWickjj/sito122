<!-- incluimos Encabezado -->
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
        <form action="index.php?c=eventos&f=edit" method="POST" name="formAcceso" id="formAcceso">
        <input type="hidden" name="id" id="id" value="<?php echo $eventos['id_evento']; ?>"/>
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
                    value="<?php echo $eventos['nombre_evento']; ?>">
                </div>
                <div class="entradas">
                    <label for="tipoEvento">TIPO DE EVENTO:</label>
                    <select id="tipoEvento" name="txtTipoEvento" >
                    <option value="<?php echo $eventos['tipo_evento']; ?>">
                            <?php echo $eventos['tipo_evento']; ?>
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
                    <input type="datetime-local" id="fechaInicio" name="txtFechaInicio" 
                    value="<?php echo isset($eventos['fecha_inicio_evento']) ? date('Y-m-d\TH:i', strtotime($eventos['fecha_inicio_evento'])) : ''; ?>">
                </div>
                <div class="entradas">
                    <label for="fechaFin">FECHA DE FIN:</label>
                    <input type="datetime-local" id="fechaFin" name="txtFechaFin" 
                    value="<?php echo isset($eventos['fecha_fin_evento']) ? date('Y-m-d\TH:i', strtotime($eventos['fecha_fin_evento'])) : ''; ?>">

                </div>
                <div class="entradas">
                    <label for="idCliente">CLIENTE:</label>
                    <select id="idCliente" name="txtIdCliente">
                        <option value=" ">--</option>
                       <?php foreach ($clientes as $cliente) {
                            if($cliente['estado_cliente']==1){
                                $selected='';
                                $selected = ($cliente['id_cliente'] == $eventos['id_cliente_evento']) ? 'selected' : '';
                                var_dump($selected);
                        ?>
                            <option value="<?php echo $cliente['id_cliente'] ?>"<?php echo $selected; ?>>
                            <?php echo $cliente['nombre_cliente']." ".$cliente['apellido_cliente']; ?>
                            </option>

                        <?php
                            }
                        }
                        ?>    
                        </select>

                </div>
                
                <div class="entradas">
                    <label for="idOrganizador">ORGANIZADOR:</label>
                    <select id="idOrganizador" name="txtIdOrganizador">
                    <option value=" ">--</option>
                       <?php foreach ($organizadores as $organizador) {
                            if($organizador['estado_organizador']==1){
                                $selected='';
                                $selected = ($organizador['id_organizador'] == $eventos['id_organizador_evento']) ? 'selected' : '';
                                var_dump($selected);
                        ?>
                            <option value="<?php echo $organizador['id_organizador'] ?>"<?php echo $selected; ?>>
                            <?php echo $organizador['nombre_organizador']." ".$organizador['apellido_organizador']; ?>
                            </option>

                        <?php
                            }
                        }
                        ?>    

                    </select>
                </div>
                <div class="entradas">
                    <label for="idLocacion">LOCACION:</label>
                    <select id="idLocacion" name="txtIdLocacion">
                    <option value=" ">--</option>
                       <?php foreach ($locaciones as $locacion) {
                            if($locacion->estado_locacion==1){
                                $selected='';
                                $selected = ($locacion->id_locacion == $eventos['id_locacion_evento']) ? 'selected' : '';
                                var_dump($selected);
                        ?>
                            <option value="<?php echo $locacion->id_locacion ?>"<?php echo $selected; ?>>
                            <?php echo $locacion->tipo_locacion." ".$locacion->nombre_locacion; ?>
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
                <a class="boton" href="index.php?c=eventos&f=index">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php require_once FOOTER ?>