<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="es">
    <!--Head-->
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="Cueva Tumbaco Jhon Jairo">
        <title>Inicio/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="assets/css/stylesBuscar.css"> 

</head>

<div id="grancontenedor">
<?php
    if (!empty($_SESSION['mensaje'])) {
    ?>
        <div class="mensaje_estado <?php echo $_SESSION['color']; ?>"><?php echo $_SESSION['mensaje']; ?></div>
        <?php
        unset($_SESSION['mensaje']);
    }
        ?>
    <div>
        <h2 style="color:#0f4e81; font-size: 30px; margin-top: 25px;"> <?php echo $titulo;?></h2>
    </div>
    <div class="contenedor" style="border: 1px solid #3f5f7a;">
        <div style="border: 1px solid #3f5f7a; padding: 25px;">
            <div class="grid" id="grid1">
                <div id="entrada">
                    <form action="index.php?c=locaciones&f=search" method="POST" id="formAcceso">
                        <input type="text" name="buscar" id="busqueda"  placeholder="  Buscar por nombre..."/>
                        <button style="width: 50%" type="submit" class="boton">Buscar</button>
                    </form>       
                </div>
                <div id="botones">
                    <div id="boton1">
                        <a href="index.php?c=locaciones&f=view_new"><button type="button" class="boton">Nueva Locacion</button></a>
                    </div>
                    <div id="boton2">
                        <a href="index.php?c=locaciones&f=index"><button type="button" class="boton">Todos</button></a>
                    </div>
                </div>
            </div>

            <div class="grid" id="grid2">
                <table>
                    <thead style="color:#0f4e81; font-size:20px">
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>TIPO</th>
                        <th>UBICACIÓN </th>
                        <th>CAPACIDAD </th>
                        <th>EQUIPAMENTO</th>
                        <th>ACTUALIZAR</th>
                        <th>ELIMINAR</th>
                    </thead>
                    <tbody>
                        <?php         
                        foreach($locaciones as $locacion){
                        ?>
                        <tr>
                            <td><?php echo $locacion->id_locacion;?></td>
                            <td><?php echo $locacion->nombre_locacion;?></td>
                            <td><?php echo $locacion->tipo_locacion;?></td>
                            <td><?php echo $locacion->ubicacion_locacion;?></td>
                            <td><?php echo $locacion->capacidad_locacion;?></td>
                            <td><?php echo $locacion->equipamento_locacion;?></td>
                            <td>
                                <a href="index.php?c=locaciones&f=view_edit&id=<?php echo  $locacion->id_locacion; ?>"
                                ><button type="button" class="boton" style="background-color:#ffb353; border-color:#cd8633">
                                Actualizar</button></a>
                            </td>
                            <td>
                                <a onclick="if(!confirm('¿Está seguro de eliminar la locacion?'))return false;" 
                                href="index.php?c=locaciones&f=delete&id=<?php echo  $locacion->id_locacion; ?>"
                                ><button type="button" class="boton" style="background-color:#b42529; border-color:#b5485f">
                                Eliminar</button></a>
                            </td>
                        </tr>
                        <?php  
                        }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php  require_once FOOTER ?>
