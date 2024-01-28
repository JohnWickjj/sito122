<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset = "UTF-8">
    <meta name="keywords" content="HTML5, CSS3, JavaScript">
    <meta name="author" content="CHISTIAN MOISES MORA VILLACIS">
    <title>Suscribirse/Eventos Gino</title>
    <link rel="stylesheet" type="text/css" href="assets/css/stylesSuscribirse.css"> 
</head>

<body>
    <header>
        <div><h1 id="nombre">Eventos Gino</h1></div>      
    </header>

    <div id="formulario">
        <main id="primero">
            <div style="border: 1px solid #24303c; padding: 25px; margin-bottom: 25px;">

                <div class="grid" id="grid1"><!--Grid1-->

                    <div id="sub"><!--Bienvenidos-->
                        <label><b>Suscribirse</b></label>
                    </div>

                    <div><!--Imagen de usuario-->
                        <img src="assets/images/EVENTOS-SUSC.jpg" alt="evento" style="width: 250px;">
                        <img src="assets/images/evento-social.png" alt="evento2" style="width: 200px;">
                    </div>
                </div>

                <div class="grid" id="grid2">

                    <div class="Datos" style="text-align: center;">
                        <label style="color: white;"><b>Datos</b></label>
                    </div>
                    
                    <div>
                        <label for="nombres">Nombre completo:</label>
                    </div>

                    <div>
                    <input type="text" id="nombres" name="nombres" ><br><br>
                    </div>
                    
                    <div>
                        <label for="correo">Correo electrónico:</label>
                    </div>

                    <div>
                    <input type="email" id="correo" name="correo" ><br><br>
                    </div>
                
                    <div>
                    <label for="telefonos">Teléfono:</label>
                    </div>

                    <div>
                    <input type="tel" id="telefonos" name="telefonos" ><br><br>
                    </div>

                    <div>
                    <label for="intereses">Intereses:</label>
                    </div>

                    <div>
                        <select id="intereses" name="intereses">
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="conciertos">Conciertos</option>
                            <option value="conferencias">Conferencias</option>
                            <option value="exposiciones">Exposiciones</option>
                            <option value="talleres">Talleres</option>
                         </select><br><br>
                    </div>     
                
                </div>

                <div class="grid" id="grid3">
                    <div>
                    <label for="comentarios">Comentarios (opcional):</label><br>
                    </div>

                    <div>
                    <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea><br><br>
                    </div>
                    
                    <div>
                    <input type="checkbox" id="suscripcion" name="suscripcion" value="si" required>
                    </div>

                    <div>
                    <label for="suscripcion">Acepto suscribirme a su boletín de eventos.</label><br><br>
                    </div>

                    <div>
                        <form action="Blog.html" method="get" onsubmit="return validarFormulario(event)">
                            <button class="Blog" type="submit">Suscribirse</button>
                        </form>
                    </div>


                </div>

            </div>

        </main>
    </div>
    <script src="assets/js/validacionSuscripcion.js"></script> 
  
</body>
</html>
<?php require_once FOOTER; ?>