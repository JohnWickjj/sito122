<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="es">
    <!--Head-->
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="Burgos Holguin David Alfredo">
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
                    <form action="index.php?c=organizadores&f=search" method="POST" id="formAcceso">
                        <input type="text" name="buscar" id="busqueda"  placeholder="  Buscar por nombre..."/>
                        <button style="width: 50%" type="submit" class="boton">Buscar</button>
                    </form>       
                </div>
                <div id="botones">
                    <div id="boton1">
                        <a href="index.php?c=organizadores&f=view_new"><button type="button" class="boton">Nuevo Organizador</button></a>
                    </div>
                    <div id="boton2">
                        <a href="index.php?c=organizadores&f=index"><button type="button" class="boton">Todos</button></a>
                    </div>
                </div>
            </div>

            <div class="grid" id="grid2">
                <table>
                    <thead style="color:#0f4e81; font-size:20px">
                        <th>ID</th>
                        <th>NOMBRES </th>
                        <th>APELLIDOS </th>
                        <th>TELEFONO </th>
                        <th>CORREO </th>
                        <th>USUARIO</th>
                        <th>ACTUALIZAR </th>
                        <th>ELIMINAR </th>
                    </thead>
                    <tbody>
                        <?php         
                        foreach($organizadores as $organizador){
                        ?>
                        <tr>
                            <td><?php echo $organizador['id_organizador'];?></td>
                            <td><?php echo $organizador['nombre_organizador'];?></td>
                            <td><?php echo $organizador['apellido_organizador'];?></td>
                            <td><?php echo $organizador['telefono_organizador'];?></td>
                            <td><?php echo $organizador['correo_organizador'];?></td>
                            <td><?php echo $organizador['nickname_user'];?></td>
                            <td>
                                <a href="index.php?c=organizadores&f=view_edit&id=<?php echo  $organizador['id_organizador']; ?>"
                                ><button type="button" class="boton" style="background-color:#ffb353; border-color:#cd8633">
                                Actualizar</button></a>
                            </td>
                            <td>
                                <a onclick="if(!confirm('¿Está seguro de eliminar el organizador?'))return false;" 
                                href="index.php?c=organizadores&f=delete&id=<?php echo  $organizador['id_organizador']; ?>"
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