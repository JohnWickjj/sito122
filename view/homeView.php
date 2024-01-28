<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="es">
    <!--Head-->
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="JANIS ODETH LARA JAMA">
        <title>Inicio/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="assets/css/stylesHOME.css"> 

    </head>
    <!--Body-->
    <body id="body">
        <!--Header-->

    <div id="grancontenedor">
        <!--Seccion Portada-->
        <section class="portada">    
        
            <div class="banner"><img src="assets/images/logo.jfif" alt="Logo de Eventos Gino"></div>
                <div class="banner"><img src="assets/images/Home.jpeg" alt="Portada de página evento"></div>

        </section>
        <button id="mood" onclick="mood()">Modo oscuro</button>
       

        <!--Main-->
        <main id="principal">


            <!--Div1-->
            <div id=div1 class = parrafo>             
                <p id="eslogan">Creando Sueños, Celebrando Elegancia</p>
                <h3>¿Quiénes somos?</h3>
                <p><span style="color: #0f4e81;"><b>Eventos Gino</b></span> no solo somos una empresa dedicada a organizar eventos, nuestro propósito es 
                    ayudar a nuestra clientela a cumplir sus sueños y celebrar sus metas de la mejor forma, 
                    brindando un <span style="color: #0f4e81;"><b>servicio excepcional</b></span>, con el fin de ofrecer materializar 
                    <span style="color: #0f4e81;"><b>historias únicas, experiencias</b></span> y <span style="color: #0f4e81;"><b>recuerdos magníficos.</b></span></p>
            </div>

            <!--Div2-->
            <div id=div2 class = parrafo>
                <h3><br>¿Por qué preferirnos?</h3>
                <p>Desde el día que abrimos nuestras puertas por primera vez, Eventos Gino nos comprometimos a superar las expectativas
                de quienes eligen, a desafiar lo convencional y a elevar a un nivel superior cada celebración. Dedicados a la calidad 
                y la excelencia, han sido el pilar de nuestra existencia durante años, y continuará siéndolo en el futuro.</p>
                <p style="display: none;">Creemos que cada evento es una oportunidad para escribir una historia inolvidable, un capítulo de la vida de nuestros
                    clientes que merece ser recordado con cariño y admiración. Siendo meticulosos con los detalles, creatividad y un equipo
                    apasionado, nos esforzamos por crear momentos mágicos que perduran en la memoria de quienes confían en nosotros.</p>
                <p style="display: none;">La satisfacción de nuestros clientes es sin duda nuestro mayor logro, nuestra misión persiste en la búsqueda constante
                    de la perfección y la elegancia. Nos enorgullece haber sido testigos de la alegría, las sonrisas y las lágrimas de
                    felicidad que nuestros eventos han inspirado a lo largo de los años. Somos quienes somos, no solo por lo que hacemos, 
                    sino por la pasión con la que lo hacemos. Y seguiremos esforzándonos para que nuestros clientes se sientan honrados 
                    de haber elegido a Eventos Gino como su compañero en la realización de sus sueños.<br></p>
            </div>
            <button onclick="leermas()" id="leermas">Leer más</button>

            <!--Div3-->
            <div id=div3 class = parrafo>
                <h2 style="color: #0f4e81; font-size: 35px; font-family:Arial, Helvetica, sans-serif;"><br>Si quieres planear tus eventos con nosotros</h2>
            </div>

            <!--Articule1-->
            <article id=art1 class="articulo">
                <h3><br>Te ofrecemos nuestros servicios</h3>
                <div class="servicios">
                    <div class="elemento"><img src="assets/images/Sociales.jpg" alt="Imagen Evento Social"><div><h2>Eventos Sociales</h2></div></div>
                    <div class="elemento"><img src="assets/images/Fotografia.jpeg" alt="Imagen de Servicio Fotografía"><div><h2>Fotografía</h2></div></div>
                    <div class="elemento"><img src="assets/images/Banquetes.jpg" alt="Imagen Servicio de Banquete"><div><h2>Banquetes</h2></div></div>
                    <div class="elemento"><img src="assets/images/iluminacion-servicio.jpg" alt="Imagen Servicio de Banquete"><div><h2>Iluminación</h2></div></div>
                    <div class="elemento"><img src="assets/images/Corporativos.jpg" alt="Imagen Evento Corporativo"><div><h2>Eventos Corporativos</h2></div></div>
                </div>           
                <a href="index.php?p=Servicios" class="masInformacion"><b>Más Información</b></a>
            </article>

            <!--Articule2-->
            <article id=art2 class = articulo>
                <h3><br>Puedes ver las locaciones disponibles</h3>
                <div class="locaciones"> 
                    <div class="elemento"><img src="assets/images/Finca.jfif" alt="Imagen Locación Finca"><div><h2>Fincas</h2></div></div>
                    <div class="elemento"><img src="assets/images/Salon.jpg" alt="Imagen Locación Salón"><div><h2>Salones</h2></div></div>
                    <div class="elemento"><img src="assets/images/Restaurante.jpg" alt="Imagen Locación Restaurante"><div><h2>Restaurantes</h2></div></div>
                    <div class="elemento"><img src="assets/images/Club.jpg" alt="Imagen Locación Club"><div><h2>Clubes</h2></div></div>
                </div>
                <a href="index.php?p=locaciones" class="masInformacion"><b>Más Información</b></a>
            </article>

            <!--Div4-->
            <div id=div4 class = parrafo>
                <div class="detalles">
                    <br><h4 id="first">Nuestros años de experiencia</h4>
                    <br><h4 id="second">nos impulsan a superar tus<br>expectativas en cada evento</h4>

                    <p id="third">Descubre cómo hacemos realidad sus sueños en Eventos Gino y 
                        <br>la magia en cada detalle. Para nosotros es importante que conozcas 
                        <br>nuestra historia y como trabajamos para brindar la mejor calidad.
                    </p>
                    
                    <br><a href="index.php?p=blog" class="masInformacion"><b>Más Información</b></a>
                </div>
                
                <div class="detalles">
                    <img src="assets/images/grupo.jpg" alt="Imagen Grupo de trabajo">
                </div>
            </div>
        </main>

        <!--asides-->
        <aside class="aside" id="primero">
            <div class="informacion">
                <div><h3>Ingresa a tu cuenta</h3></div>
                <img src="assets/images/LogIn.png" alt="Imagen de Ingreso a la cuenta" style="width: 100px;" id="imagenR1">
                <p>Puedes ingresar a tu cuenta para navegar por nuestro sitio web y acceder a algunas servicios
                    personalizados.</p>
            </div>
            <a href="index.php?p=login"><b>Ingresar</b></a>
        </aside>
        
        <aside class="aside" id="segundo">
            <div class="informacion">
                <div><h3>Cotiza tus eventos</h3></div>  
                <img src="assets/images/Cotizar.png" alt="Imagen de Ingreso a la cuenta" style="width: 100px;">          
                <p>Para conocer el costo de tus eventos, especifica detalles de lo que necesitas y conoce qué paquete de servicios es el mejor para ti.</p>
            </div>
            <a href="index.php?p=Servicios"><b>Cotizar</b></a>
        </aside>

        <aside class="aside" id="tercero">
            <div class="informacion">
                <div><h3>Busca locaciones</h3></div> 
                <img src="assets/images/locaciones.png" alt="Imagen de Ingreso a la cuenta" style="width: 100px;">     
                <p>Puedes encontrar el mejor lugar para tu evento en cualquier sector de Guayaquil.<br></p>
            </div>
            <a href="index.php?p=LocacionesForm"><b>Localizar</b></a>
        </aside>

        <aside class="aside" id="cuarto">
            <div class="informacion">
                <div><h3>¡Conéctate con nosotros!</h3></div>
                <p>Valoramos tu participación y queremos mantenerte al tanto de todas nuestras novedades, 
                    actualizaciones y eventos emocionantes. Síguenos en nuestras redes para obtener información 
                    exclusiva, interactuar con nuestra comunidad y estar al día con lo que está sucediendo en 
                    Eventos Gino. 
               </p>
                
               <p><a href="https://www.facebook.com/tuperfil"><img src="assets/images/facebook.png" alt="Facebook" width="32" height="32">
                  </a>Eventos Gino</p>
                <p><a href="https://www.instagram.com/"><img src="assets/images/instagram.png" alt="Instagram" width="32" height="32">
                  </a>@eventosgino</p>
                <p><a href="https://twitter.com/iniciarsesion?lang=es"><img src="assets/images/twitter.png" alt="Twitter" width="32" height="32">
                  </a>@eventos_gino</p>
                <p><a href="https://web.telegram.org/"><img src="assets/images/telegram.png" alt="Telegram" width="32" height="32">
                  </a>@EventosGino</p>
                <p><a href="https://www.tiktok.com/es/"><img src="assets/images/tiktok.png" alt="Tiktok" width="32" height="32">
                  </a>eventosginogyq</p>
                <p><a href="https://ec.linkedin.com/"><img src="assets/images/linkedin.png" alt="LinkedIn" width="32" height="32">
                  </a>Eventos_Gino</p>
                
            </div>
           
        </aside>

        <div class="stopFloat"></div>

    </div>
    <script src="assets/js/validacionHome.js"></script> 
    </body>
</html>

<?php
require_once FOOTER; ?>
