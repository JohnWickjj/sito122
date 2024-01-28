<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="es">

    <!--Head-->
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="Jhon Jairo Cueva Tumbaco">
        <title>Cotizar/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="assets/css/stylesCotizar.css"> 

        
    </head>

    <!--Body-->
    <body>
        <!--Header-->

        <!--Main-->
        <main>
            
          <div>
              <h2 class="titulo">Solicitar presupuesto</h2>  
          </div>
          
                <div class="formulario01">
                    <form id="form1" name="formCotizar">
                        <div>
                            <label for="nombres">Nombres:</label>
                            <input type="text" id="nombres" name="nombres" placeholder="Nombres y apellidos"><br>
                        </div>
                        <br>
                        <div>
                            <label for="correo">Correo Electrónico:</label>
                            <input type="email" id="correo" name="correo" placeholder="Email" ><br>
                        </div>
                        <br>
                        <div>
                            <label for="telefono">Teléfono:</label>
                            <input type="tel" id="telefono" name="telefono" placeholder="Número de teléfono"><br>
                        </div>
                        <br>
                        <div>
                            <label for="ciudad">Ciudad:</label>
                            <select id="ciudad" name="ciudad">
                                <option value="0">Seleccione..</option>
                                <option value="1">Samborondón</option>
                                <option value="2">Daule</option>
                                <option value="3">Durán</option>
                                <option value="4">Naranjal</option>
                                <option value="5">Guayaquil</option>
                                <option value="4">San Pablo</option>
                                <option value="4">Salitre</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <label id="sexo">Sexo:</label><br>
                            <div class="centrado">
                                <input type="radio" id="masculino" name="sexo" value="Masculino">
                                <label for="masculino" style="font-weight: normal">Masculino</label>
                                <input type="radio" id="femenino" name="sexo" value="Femenino">
                                <label for="femenino" style="font-weight: normal">Femenino</label>
                                <input type="radio" id="otro" name="sexo" value="Otro">
                                <label for="otro" style="font-weight: normal">Otro</label><br>
                            </div>
                        </div>
                        <br>
                        <div>
                            <label>¿Qué podemos ayudarte?</label><br>
                            <br><input type="checkbox" id="encendiendo" name="ayuda[]" value="Encendiendo">
                            <label for="encendiendo">Encendiendo</label><br>
                            <input type="checkbox" id="sonido" name="ayuda[]" value="Sonido">
                            <label for="sonido">Sonido</label><br>
                            <input type="checkbox" id="video" name="ayuda[]" value="Video">
                            <label for="video">Video</label><br>
                            <input type="checkbox" id="puesta-en-escena" name="ayuda[]" value="Puesta en escena">
                            <label for="puesta-en-escena">Puesta en escena</label><br>
                            <input type="checkbox" id="animador" name="ayuda[]" value="Animador">
                            <label for="animador">Animador</label><br>
                            <input type="checkbox" id="otro-ayuda" name="ayuda[]" value="Otro">
                            <label for="otro-ayuda">Otro</label><br>
                        </div>
                        <br>
                        <div>
                            <label>¿Qué tipo de evento?</label><br>
                            <br><input type="checkbox" id="corporativo" name="tipo-evento[]" value="Corporativo">
                            <label for="corporativo">Corporativo</label><br>
                            <input type="checkbox" id="caridad" name="tipo-evento[]" value="Caridad">
                            <label for="caridad">Caridad</label><br>
                            <input type="checkbox" id="celebracion" name="tipo-evento[]" value="Celebracion">
                            <label for="celebracion">Celebración</label><br>
                            <input type="checkbox" id="fiesta-baile" name="tipo-evento[]" value="Fiesta de baile">
                            <label for="fiesta-baile">Fiesta de baile</label><br>
                            <input type="checkbox" id="instalacion-permanente" name="tipo-evento[]" value="Instalación permanente">
                            <label for="instalacion-permanente">Instalación permanente</label><br>
                        </div>
                        <br>
                        <div>
                            
                            <label for="fecha">¿Cuándo es tu evento?</label><br>
                            <br><input type="date" name="fecha" id="fecha">
                        </div>
                        <br>
                        <div>
                            <label for="comentario">Cuéntanos más sobre tu evento:</label><br>
                            <br><textarea id="comentario" name="comentario" rows="4" cols="80" placeholder="Descripción del evento"></textarea><br>
                        </div>
                        <br>

                        <div class="centrado">

                            <input type="submit" name="btnCotizar" class="btn btn-primary" value="Enviar">
                            <input type="reset" class="btn btn-primary" value="Cancelar">
                        </div>

                    </form>
                            
                </div>

        </main>

    <!--PARA ENLAZAR EL DOCUMENTO JS EXTERNO-->
 <script src="assets/js/validacionesform1.js"></script>
    </body>
</html>
<?php require_once FOOTER; ?>