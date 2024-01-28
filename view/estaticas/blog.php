<?php require_once HEADER; ?>

<?php
$cookie_name = "seasonalContentVisible";
$cookie_value = "true";

if (isset($_POST['toggleSeasonalContent'])) {
    $cookie_value = ($_COOKIE[$cookie_name] === "true") ? "false" : "true";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // La cookie expira en 30 días
    echo "Cookie guardada con éxito";
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="CHISTIAN MOISES MORA VILLACIS">
        <title>Blog/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="assets/css/stylesBlog.css">
        

   </head>
   <body>
    
   <?php     
              $image = "assets/images/";
        ?>

<section class="Comohacereventos">
    <h3 id="primertitulo">Aprende más de Nosotros</h3>
<img src= <?php echo $image . '/Blog1.jpg'; ?> alt ="imagenes" style="width: 400px; height: 400px;  text-align: center; top: 0;" >
<img src= <?php echo $image .'/logo.jfif'; ?> alt ="Imagen" style="width: 400px; height: 400px;  text-align: center; top: 0;" >
<img src= <?php echo $image .'GRANevento.jpg'; ?> alt ="Imagen" style="width: 400px; height: 400px;  text-align: center; top: 0;" >
</section>

<main>
    <div id=div1 class=parrafo>
        <h3>¿Por qué contratarnos?</h3>
        <p>Cuando las empresas organizan eventos corporativos, creen que contratar a un planificador de eventos corporativos los pondrá por encima del presupuesto. 
        En realidad, los planificadores conocen los consejos, trucos y contactos que ahorran a las empresas tiempo y dinero a largo plazo sin sacrificar la calidad del evento. 
        Como trabaja un organizador de eventos corporativos.</p>
    </div>

    <div id=div2 class=parrafo>
        <h3>¿Cómo Organizamos Eventos?</h3>
        <img src= <?php echo $image .'ORGANIZADOR.jpg'; ?> alt ="Organización de Eventos" style="width: 400px; text-align: center; top: 0; margin-bottom: 25px;">
        <p>Cada evento que planificamos se basa en la excelencia y la dedicación para brindar a nuestros clientes experiencias inolvidables. 
            Nuestro proceso de organización comienza con una cuidadosa atención a los detalles y una comprensión profunda de las necesidades y deseos de nuestros clientes.

            Desde la selección de ubicaciones espectaculares hasta la coordinación de proveedores de confianza y la planificación meticulosa de cada aspecto, 
            nuestro equipo altamente capacitado trabaja incansablemente para asegurarse de que cada evento sea un éxito.
    
            Ya sea que estés buscando organizar una boda, una conferencia, una fiesta corporativa o cualquier otro tipo de evento,
            confía en nosotros para hacer que tus sueños se hagan realidad. ¡Esperamos tener la oportunidad de trabajar contigo y hacer que tu próximo evento sea verdaderamente especial!
        </p>
        <br>
    </div>

    <div class="boton" >
    <button id="toggleSeasonalContent" class="toggle-button" onclick="toggleSeasonalContent()">
    <?php echo ($cookie_value === "true") ? 'Ocultar Contenido de Temporada' : 'Mostrar Contenido de Temporada'; ?>
</button>

<script>
    function toggleSeasonalContent() {
        // Realizar una petición POST a través de JavaScript
        var xhr = new XMLHttpRequest();
        xhr.open("POST", window.location.href, true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        // Simular el envío del formulario
        xhr.send("toggleSeasonalContent=true");

        // Actualizar el texto del botón
        var button = document.getElementById("toggleSeasonalContent");
        button.textContent = (button.textContent.trim() === 'Ocultar Contenido de Temporada') ? 'Mostrar Contenido de Temporada' : 'Ocultar Contenido de Temporada';
    }
</script>
    </div>
   
    <div class="seasonal-section"><br>
     <br><h2>Contenido de Temporada</h2>
     <div class="content-card">
       <img src= <?php echo $image .'imagen-navidad.jpg'; ?> alt="Decoración navideña">
       <h3>Decoración Festiva</h3>
       <p>Descubre cómo decorar tu hogar con un toque navideño. Desde árboles de Navidad hasta luces brillantes, ¡haz que tu hogar brille esta Navidad!</p>
     </div>
     <div class="content-card">
       <img src=<?php echo $image .'Regalos.jpg'; ?> alt="Regalos navideños">
       <h3>Ideas de Regalos</h3>
       <p>Encuentra inspiración para regalos navideños perfectos. Ya sea para familiares, amigos o compañeros de trabajo, tenemos ideas para todos.</p>
     </div>
   </div>

    <div id=div3 class=parrafo style="margin-bottom: 100px;">
        <br><br>
            <h3>
                <br>Eventos Pasados 
            </h3>
            <p>A lo largo de los años, hemos tenido el privilegio de organizar una amplia gama de eventos inolvidables. Cada evento ha sido una experiencia única y especial para nuestros clientes.
            Aquí te presentamos una selección de algunos de los eventos más destacados que hemos organizado:</p>

                    <!-- Contenedor de todas las imágenes -->
            <div class="imagen-container">
                <!-- Evento 1 -->
                <div class="imagen-container">
                    <img src=<?php echo $image .'EVENTOPASADO1.jpeg'; ?> alt="Evento 1" style="width: 400px; height: 400px;">
                    
                </div>

                <!-- Evento 2 -->
                <div class="imagen-container">
                    <img src=<?php echo $image .'eventopasado2.jpeg'; ?> alt="Evento 2" style="width: 400px; height: 400px;">
                    
                </div>

                <!-- Evento 3 -->
                <div class="imagen-container">
                    <img src=<?php echo $image .'eventopasado3.jpeg'; ?> alt="Evento 3" style="width: 400px; height: 400px;">
                    
                </div>

            </div>    
    </div>

    <div id=div5 class=parrafo1 style="margin-bottom: 100px;">
     <section>
         <h3 >Suscribete a nuestra pagina</h3><br>
         <img src=<?php echo $image .'evento-corporativo.jpg'; ?> alt="Sub" style="width: 400px">
         <p>Si deseas mantenerte al tanto de todas las novedades, actualizaciones y contenido relevante, te invitamos a suscribirte a nuestra plataforma. 
             La suscripción te brindará acceso exclusivo a un mundo de información fresca y valiosa directamente en tu bandeja de entrada.</p>
             <br><br>
                 <a href="Suscribirse.html">Suscribete ya</a>
     </section>
    </div>

    <div id=div6 class=parrafo1 style="margin-bottom: 100px;">
     <section>
         <h3 >Beneficios al suscribirte</h3><br>
         <img src=<?php echo $image .'eventos-sobre_nosotros.jpg'; ?> alt="Sub2" style="width: 185px">
         <p>Al convertirte en miembro de nuestra comunidad, te esperan una serie de beneficios exclusivos que hacen que tu elección sea más que acertada.<br>
         <br>
         1. Acceso Prioritario a Contenido Exclusivo<br>
         2. Actualizaciones Periódicas<br>
         3. Descuentos y Ofertas Especiales<br>
         4. Soporte Exclusivo</p>
         
     </section>
    </div>


    

    <div id=div4 class=parrafo style="margin-bottom: 100px;">
        <h3>Testimonios de <span style="color: #0f4e81">Nuestros Clientes</span></h3>
        
        <div class="testimonial">
         <img src=<?php echo $image .'ImagenCliente1.jpg'; ?> alt="Cliente 1" >
         <p>"El evento que organizó esta empresa superó todas nuestras expectativas. Desde la planificación hasta la ejecución, todo fue impecable. ¡Definitivamente los recomendamos!"</p>
         <p class="client-name">- Mirka Bolaños</p>
     </div>

     <div class="testimonial">
         <img src=<?php echo $image .'ImagenCliente2.jpg'; ?> alt="Cliente 2">
         <p>"Hemos trabajado con esta empresa en múltiples eventos y cada vez han demostrado su profesionalismo y creatividad. Son expertos en lo que hacen."</p>
         <p class="client-name">- Antonio Flores</p>
     </div>

     <div class="testimonial">
         <img src=<?php echo $image .'ImagenCliente3.jpg'; ?> alt="Cliente 3" >
         <p>"Los eventos organizados por esta empresa son simplemente inolvidables. La atención a los detalles y la pasión que ponen en su trabajo son evidentes en cada aspecto."</p>
         <p class="client-name">- José Maruri</p>
     </div>

    </div>

    <div class="faq-section">
     <h2>Preguntas Frecuentes</h2>
     <div class="faq-item">
       <h3>¿Cómo puedo registrarme para un evento?</h3>
       <p>Para registrarte en nuestros eventos, visita nuestra página de eventos y haz clic en el botón de registro en el evento que te interesa. Luego, sigue las instrucciones para completar tu registro.</p>
     </div>
     <div class="faq-item">
       <h3>¿Puedo cancelar mi registro para un evento?</h3>
       <p>Sí, puedes cancelar tu registro para un evento en cualquier momento. Por favor, comunícate con nuestro equipo de soporte para solicitar la cancelación y obtener más información.</p>
     </div>
     <div class="faq-item">
       <h3>¿Dónde se llevará a cabo el próximo evento?</h3>
       <p>Nuestros eventos se realizan en diferentes ubicaciones. Puedes encontrar la información detallada sobre la ubicación en la página de cada evento o en la confirmación de tu registro.</p>
     </div>
   </div>

        
</main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Obtener el botón y la sección de contenido de temporada
            var toggleButton = document.getElementById('toggleSeasonalContent');
            var seasonalSection = document.querySelector('.seasonal-section');
    
            // Estado inicial: visible
            seasonalSection.style.visibility = 'visible';
            seasonalSection.style.opacity = '1';
    
            // Agregar un evento de clic al botón
            toggleButton.addEventListener('click', function () {
                // Alternar la visibilidad de la sección de contenido de temporada
                if (seasonalSection.style.visibility === 'hidden' || seasonalSection.style.visibility === '') {
                    seasonalSection.style.visibility = 'visible';
                    seasonalSection.style.maxHeight = '1000px'; 
                    seasonalSection.style.opacity = '1';
                    toggleButton.textContent = 'Ocultar Contenido de Temporada';
                } else {
                    seasonalSection.style.maxHeight = '0px'; 
                    seasonalSection.style.visibility = 'hidden';
                    seasonalSection.style.opacity = '0';
                    toggleButton.textContent = 'Mostrar Contenido de Temporada';
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Obtener todas las imágenes
            var imagenes = document.querySelectorAll('img');
    
            // Agregar eventos a cada imagen
            imagenes.forEach(function (imagen) {
                imagen.addEventListener('mouseover', function () {
                    // Cambiar el estilo cuando el mouse está sobre la imagen
                    imagen.style.opacity = '0.8';
                });
    
                imagen.addEventListener('mouseout', function () {
                    // Revertir el estilo cuando el mouse sale de la imagen
                    imagen.style.opacity = '1';
                });
            });
        });
    </script>
    
    
     
    
    </body>
</html>

<?php require_once FOOTER; ?>