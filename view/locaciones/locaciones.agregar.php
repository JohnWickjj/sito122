<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="Cueva Tumbaco Jhon Jairo">
        <title>Acceder a la cuenta/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="assets/css/stylesAgregar.css">
        <style>
        #checks{
            width: 100%;
            display: grid;
            grid-template-columns: 100%;
            grid-template-rows: 20px 20px 20px;
            gap: 10px;
            margin-bottom: 25px;
            text-align: left;
        }

        #checks div{
            width: 100%;
            max-width: 100%;
            max-height: 0 auto;
            text-align: left;
            padding-left: 25px;
        }

        #checks label, input{
            color: white;
            font-size: 20px;
        }
        </style>
    </head>
    <body>

<div id="grancontenedor">
    <div>
        <h2 style="color:#0f4e81; font-size: 30px; margin-top: 25px;"><?php echo $titulo; ?></h2>
    </div>
    
    <div class="contenedor" style="border: 1px solid #3f5f7a;">
        <form action="index.php?c=locaciones&f=new" method="POST" name="formAcceso" id="formAcceso">
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
                    <label for="tipo">TIPO:</label>
                    <select id="tipo" name="txtTipo">
                        <option value=" ">--</option>
                        <option value="HACIENDA">HACIENDA</option>
                        <option value="SALON">SALON</option>
                        <option value="LOCAL">LOCAL</option>  
                        <option value="AUDITORIO">AUDITORIO</option>            
                        <option value="JARDIN">JARDIN</option>  
                        <option value="COMPLEJO">COMPLEJO</option>         

                    </select>
                </div>
                <div class="entradas">
                    <label for="prov_ciu">UBICACION:</label>
                    <input type="text" id="prov_ciu" name="txtUbicacion">
                </div>
                <div class="entradas">
                    <label for="correo">CAPACIDAD:</label>
                    <input type="text" id="correo" name="txtCapacidad" >
                </div>
            </div>

            <label style="font-size: 20px; color:white;" for="id_user">Equipado con:</label>
            
            <div class="grid" id="checks">
                <div class="checks">
                    <input type="checkbox" id="pistaDeBaile" name="Equipamento[]" value="Pista de baile">
                    <label for="pistaDeBaile">Pista de baile</label>
                </div>

                <div class="checks">
                    <input type="checkbox" id="mesas" name="Equipamento[]" value="Mesas">
                    <label for="mesas">Mesas</label>
                </div>

                <div class="checks">
                    <input type="checkbox" id="sillas" name="Equipamento[]" value="Sillas">
                    <label for="sillas">Sillas</label>
                </div>

                <div class="checks">
                    <input type="checkbox" id="comedores" name="Equipamento[]" value="Comedores">
                    <label for="comedores">Comedores</label>
                </div>

                <div class="checks">
                    <input type="checkbox" id="sonido" name="Equipamento[]" value="Sonido">
                    <label for="sonido">Sonido</label>
                </div>

                <div class="checks">
                    <input type="checkbox" id="decoracion" name="Equipamento[]" value="Decoracion">
                    <label for="decoracion">Decoracion</label>
                </div>

                <div class="checks">
                    <input type="checkbox" id="escenarioConPodio" name="Equipamento[]" value="Escenario con Podio">
                    <label for="escenarioConPodio">Escenario con Podio</label>
                </div>

                <div class="checks">
                    <input type="checkbox" id="pantalla" name="Equipamento[]" value="Pantalla">
                    <label for="pantalla">Pantalla</label>
                </div>

                <div class="checks">
                    <input type="checkbox" id="barra" name="Equipamento[]" value="Barra">
                    <label for="barra">Barra</label>
                </div>

                <div class="checks">
                    <input type="checkbox" id="piscina" name="Equipamento[]" value="Piscina">
                    <label for="piscina">Piscina</label>
                </div>
            </div>
            <div id="grid2">
                <button type="submit" class="boton">Guardar</button>
                <a class="boton" href="index.php?c=locaciones&f=index">Cancelar</a>
            </div>
        </form>
    </div>
</div>
</div>

<?php require_once FOOTER; ?>