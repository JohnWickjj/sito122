<?php require_once HEADER; ?>

<?php
$cookie_name = "temaValores";
$cookie_value = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : "claro";

if (isset($_POST['toggleTheme'])) {
    $cookie_value = ($cookie_value === "claro") ? "oscuro" : "claro";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    echo "Preferencia de tema guardada con éxito";
}

?>
        
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="DAVID ALFREDO BURGOS HOLGUÍN">
        <title>Sobre Nosotros/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="assets/css/stylesNosotros.css"> 

    </head>

    <body>
       

<!--Contenido Principal-->
<main>
    <!--Contenido-->
    <div class="principal" id="diva">

    <?php     
              $image = "assets/images/";
        ?>

        <!--Logo y título principal-->
        <div class="banner" style="display: flex;">
            <img src= <?php echo $image . '/logo.jfif'; ?> style="padding-left: 20px;" alt="Logo de Eventos Gino">
            <div>
                <h2 style="font-size: 50px; color: #0f4e81; font-weight: bold; padding: 35px; margin-top: 10px;">Tu Socio en Eventos Inolvidables</h2>
                <p style="width: 800px; font-size: 23px; padding-left: 40px; max-width: 800px;">Somos una empresa dedicada a organizar eventos especiales para nuestros clientes. Con años de experiencia
                en la industria, nos enorgullecemos de crear experiencias únicas y memorables para todas las ocasiones.</p>
                
            </div>
        </div>
        
        <!--Valores Eventos Gino-->
        <div class="contenido valores-tema-claro" id="valores">
        
        <button id="cambioTemaBtn" name="toggleTheme" onclick="toggleTheme()">Cambiar Tema de esta sección </button>
        
            <h2>Nuestros Valores</h2>
            <ol style="padding-left: 45px; padding-right: 45px; text-align: justify;">
                <li><strong class="palabra">Compromiso:</strong> Nos comprometemos a hacer realidad las visiones de nuestros clientes y a superar sus expectativas en cada evento que organizamos.</li>
                <li><strong class="palabra">Creatividad:</strong> Adoptamos un enfoque creativo en cada evento, brindando ideas innovadoras y soluciones únicas para hacer que cada ocasión sea especial y memorable.</li>
                <li><strong class="palabra">Profesionalismo:</strong> Nuestro equipo está formado por profesionales altamente capacitados y experimentados que se esfuerzan por ofrecer un servicio de alta calidad y atención al cliente excepcional.</li>
                <li><strong class="palabra">Personalización:</strong> Entendemos que cada evento es único. Nos especializamos en personalizar cada detalle para adaptarnos a los gustos y preferencias individuales de nuestros clientes.</li>
                <li><strong class="palabra">Integridad:</strong> Operamos con integridad y transparencia en todas nuestras interacciones, manteniendo la confidencialidad y el respeto por nuestros clientes y sus eventos.</li>
                <li><strong class="palabra">Experiencia:</strong> Contamos con una vasta experiencia en la industria de eventos, lo que nos permite manejar cualquier desafío y garantizar la ejecución impecable de cada evento que organizamos.</li>
                <li><strong class="palabra">Atención al Detalle:</strong> Prestamos atención meticulosa a cada detalle, desde la decoración hasta la logística, para garantizar que cada evento sea visualmente impresionante y sin problemas.</li>
                <li><strong class="palabra">Emoción:</strong> Nos apasiona crear experiencias emocionantes y memorables. Nos esforzamos por infundir emoción en cada evento, dejando una impresión duradera en nuestros clientes y sus invitados.</li>
            </ol>

            <script>
                function toggleTheme() {
                    // Realizar una petición POST a través de JavaScript
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", window.location.href, true);
                    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                    // Simular el envío del formulario
                    xhr.send("toggleTheme=true");

                    // Actualizar el tema en el lado del cliente
                    document.addEventListener("DOMContentLoaded", function () {
                    var seccionValores = document.getElementById("valores");
                    var botonCambioTema = document.getElementById("cambioTemaBtn");

                    // Agrega un evento de clic al botón
                    botonCambioTema.addEventListener("click", function () {
                        // Alternar entre las clases de valores-tema-claro y valores-tema-oscuro solo en la sección de valores
                        seccionValores.classList.toggle("valores-tema-claro");
                        seccionValores.classList.toggle("valores-tema-oscuro");
                    });
                });
                }
            </script>
        </div>

        
        <!--Misión y Visión Eventos Gino-->
        <div style="margin-bottom: 12px;">
            <p style="font-size: 23px;margin-bottom: 12px;">Si deseas conocer sobre nuestra Misión y Visión que es lo que nos mantiene firmes como empresa haz click en el boton sin dudarlo:</p>
        <button id="MisionVisionBtn">Mostrar/Ocultar Misión y Visión</button>
        </div>

        <div class="contenido" id="mvision">
            
            <h2>Misión</h2>
            <p>Nuestra misión es superar las expectativas de nuestros clientes al proporcionar servicios de eventos
            excepcionales. Nos esforzamos por crear momentos inolvidables y garantizar la satisfacción total de
            quienes confían en nosotros para sus eventos especiales.</p>
     
            <h2>Visión</h2>
            <p>Aspiramos a ser líderes en la industria de eventos, innovando continuamente y ofreciendo servicios
            excepcionales que inspiren y deleiten a nuestros clientes. Buscamos expandir nuestro alcance y crear
            asociaciones a largo plazo con clientes satisfechos.</p>
        </div>

        <div style="border: 1px solid rgb(169, 175, 194);width: 1160px;"></div>

 <!-- Fundadores Eventos Gino -->
<div class="contenido" id="fundadores">
    <h3>Nuestros Fundadores</h3>
    
    <div class="bloque"><!--arriba-->
        <aside class="foto" onmouseover="cambiarEstilos(this)" onmouseout="restaurarEstilos(this)">
            <img src<?php echo $image . 'Fundador1.jpeg';?> alt="Uno de nuestros fundadores">
            <p>Gino Avilés Romero</p>
        </aside>

        <aside class="foto" onmouseover="cambiarEstilos(this)" onmouseout="restaurarEstilos(this)">
            <img src<?php echo $image . 'Fundador2.jpeg'; ?> alt="Uno de nuestros fundadores">
            <p>David Burgos Holguín</p>
        </aside>

        <aside class="foto" onmouseover="cambiarEstilos(this)" onmouseout="restaurarEstilos(this)">
            <img src<?php echo $image . 'Fundador3.jpeg'; ?> alt="Uno de nuestros fundadores">
            <p>Jhon Cueva Tumbaco</p>
        </aside>
    </div>
        
    <div class="bloque"><!--abajo-->
        <aside class="foto" onmouseover="cambiarEstilos(this)" onmouseout="restaurarEstilos(this)">
            <img src<?php echo $image . 'Fundador4.jpeg'; ?> alt="Uno de nuestros fundadores">
            <p>Janis Lara Jama</p>
        </aside>

        <aside class="foto" onmouseover="cambiarEstilos(this)" onmouseout="restaurarEstilos(this)">
            <img src<?php echo $image . 'Fundador5.jpeg'; ?> alt="Uno de nuestros fundadores">
            <p>Christian Mora Villacis</p>
        </aside>
    </div>
</div>

        <!--Equipo y Contactos Eventos Gino-->
        <div class="contenido" id="equipo">
            <h2>Nuestro Equipo</h2>
            <p>Nuestro equipo está compuesto por profesionales apasionados y dedicados que trabajan incansablemente para
                hacer realidad tus sueños y visiones. Cada miembro de nuestro equipo aporta habilidades únicas y creatividad
                para garantizar que cada evento sea un éxito.</p>
    
            <h2>Contáctanos</h2>
            <p>Estamos aquí para ayudarte a planificar el evento perfecto. ¡Contáctanos hoy mismo y descubre cómo podemos
                hacer tu evento especial e inolvidable!</p>
        </div>

        <!--Trabaja con nosotros Eventos Gino-->
        <div class="Trabajo" id="registro">
            <h2>Trabaja Con Nosotros</h2>
            <p>Si quieres formar parte de nuestro equipo como uno de nuestros trabajadores
                 no dudes en registrarte y enviar tu hoja de vida en el siguiente enlace</p>
            <a id="Enlace-registro" href="FormTrabajaConNosotros.html">Click aquí para registrate</a>
        </div>

        <!--Disposición de Eventos Gino-->
        <div class="contenido" id="ofrece">
            <dl style="flex: 0 0 auto; width: 442px; margin-top: 25px; padding-left: 20px; padding-right: 25px; clear: both; float: right;" class="informacion">
                <dt>A su disposición:</dt>
                <dt>Servicios</dt>
                <dd>Organización de eventos especiales, desde bodas hasta conferencias empresariales.</dd>
        
                <dt>Locaciones</dt>
                <dd>Locales elegantes y bien equipados en diferentes áreas de Guayaquil para todo tipo de eventos.</dd>
        
                <dt>Blog</dt>
                <dd>Todo lo que necesitas saber con articulos y a detalle sobre lo que hacemos de manera dinámica.</dd>
            </dl>
        </div>

        <!--Articulo Eventos Gino-->
        <article>
            <h2 style="max-height: 80px; padding: 25px;">Un poco de lo que hacemos</h2>
                <div class="imagenes-acciones">
                    <img src<?php echo $image . 'eventos-sobre_nosotros.jpg';?> alt="Eventos">
                    <img src<?php echo $image . 'eventos-sobre_nosotros.jpg';?> alt="Demostración">
                </div>
        </article>
    </div>
                                
    
    
</main>
    <script>

        document.addEventListener("DOMContentLoaded", function () {
            var misionVisionContenido = document.getElementById("mvision");
            var MisionVisionBtn = document.getElementById("MisionVisionBtn");
    
            // Ocultar la sección de Misión y Visión al principio
            misionVisionContenido.style.display = "none";
    
            // Función para mostrar/ocultar la sección de Misión y Visión
            function AlternarMisionVision() {
                misionVisionContenido.style.display = (misionVisionContenido.style.display === "none" || misionVisionContenido.style.display === "") ? "block" : "none";
            }
    
            // Agrega un evento de clic al botón
            MisionVisionBtn.addEventListener("click", AlternarMisionVision);
        });
    </script>
    
    <script>
        // Almacena los estilos originales de cada imagen
        var estilosOriginales = {};
    
        // Función para cambiar los estilos al pasar el ratón sobre las imágenes de fundadores
        function cambiarEstilos(element) {
            // Almacena los estilos originales antes de cambiarlos
            estilosOriginales[element.src] = {
                border: element.style.border,
                boxShadow: element.style.boxShadow
            };
    
            // Cambia los estilos
            element.style.border = '2px solid #fff';
            element.style.boxShadow = '5px 5px 10px rgba(0, 0, 0, 0.8)';
        }
    
        // Función para restaurar los estilos al salir del ratón de las imágenes de fundadores
        function restaurarEstilos(element) {
            // Restaura los estilos originales almacenados
            var estilosOriginal = estilosOriginales[element.src];
            if (estilosOriginal) {
                element.style.border = estilosOriginal.border;
                element.style.boxShadow = estilosOriginal.boxShadow;
            }
        }
    </script>
        <script>
          document.addEventListener("DOMContentLoaded", function () {
    var seccionValores = document.getElementById("valores");
    var botonCambioTema = document.getElementById("cambioTemaBtn");

    // Agrega un evento de clic al botón
    botonCambioTema.addEventListener("click", function () {
        // Alternar entre las clases de valores-tema-claro y valores-tema-oscuro solo en la sección de valores
        seccionValores.classList.toggle("valores-tema-claro");
        seccionValores.classList.toggle("valores-tema-oscuro");
    });
});
                    
        </script>

    </body>
</html>
        

</div>
<?php require_once FOOTER; ?>