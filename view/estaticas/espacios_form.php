<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="GINO ALEXANDER AVILÉS ROMERO">
        <title>Buscar Locaciones/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="assets/css/stylesLocacionesForm.css"> 
        
    </head>
    <!--ELEMENTO BODY-->
    <body>
             
        <!--ETIQUETA SEMÁNTICA ASIDE / SUBMENÚ DE FILTROS DE BÚSQUEDA-->
        <aside>
            <h2>Filtros de Búsqueda</h2>
            <form>
                <label for="categoria">Categoría:</label>
                <select id="categoria" name="categoria" onchange="filtrarCont()">
                    <option value="opcion1">Finca</option>
                    <option value="opcion2">Salón</option>
                    <option value="opcion3">Restaurante</option>
                    <option value="opcion4">Club</option>
                </select>
                <label for="precioMin">Precio Mínimo:</label>
                <input type="range" id="precioMin" name="precioMin" min="0" max="1000" step="10" oninput="filtrarRange(this)">
                <span id="valRange1">0</span>
                <label for="precioMax">Precio Máximo:</label>
                <input type="range" id="precioMax" name="precioMax" min="0" max="1000" step="10" oninput="filtrarRange(this)">
                <span id="valRange2">100</span>
                <label for="palabraClave">Palabra Clave:</label>
                <input type="search" placeholder="Ingrese palabra clave: animado, sofisticado o versátil" id="palabraClave" name="palabraClave" size="35">
                <label for="radio1">Zonas</label>
                <input type="radio" id="radio1" name="Zonas" value="opcion1" onchange="mostrarCont()">Norte
                <input type="radio" id="radio2" name="Zonas" value="opcion2" onchange="mostrarCont()">Sur
                <br>
                <button type="submit" onclick="filtrarPalabra()">Buscar</button>
            </form>
        </aside>

        <!-- ETIQUETA SEMNÁNTICA MAIN / CONTENIDO-->
        <main id="cont">
            <!--ETIQUETA SEMÁNTICA SECTION / TITULAR DE LOCACIONES-LOCALES-->
            <section id="titular">
                <h2 style="color:rgb(15, 78, 129);font-size:45px;">Locaciones</h2>
                <h3>A continuación, disponemos de los siguientes espacios físicos disponibles para cotizaciones:</h3>
            </section>
            <div id="inicio">
                <p>
                    Cuando se trata de planificar el evento perfecto, 
                    o hay margen para errores. Ya sea una boda, una fiesta 
                    de cumpleaños, una conferencia corporativa o cualquier 
                    otro evento especial, encontrar la locación adecuada es 
                    fundamental. Ahí es donde "Eventos Gino" entra en juego.
                </p>
                <p>
                    Eventos Gino es un negocio dedicado a ayudarte a 
                    encontrar las locaciones ideales para tu próximo evento. 
                    Ya sea que estés buscando una finca pintoresca, un 
                    elegante salón, un restaurante de primera clase o un 
                    animado bar, tenemos una amplia gama de opciones para 
                    satisfacer tus necesidades.
                </p>
                <h3>Categorías de búsqueda</h3>
                <ol>
                    <li>
                        <strong>Finca: </strong>
                        ¿Sueñas con un evento al aire libre en un entorno 
                        natural? Explora nuestras opciones de fincas 
                        encantadoras, rodeadas de belleza escénica.
                    </li>
                    <li>
                        <strong>Salón: </strong>
                        Si buscas un espacio versátil y cómodo para tu evento, 
                        nuestros salones te ofrecen una gran variedad de 
                        opciones.
                    </li>
                    <li>
                        <strong>Restaurante: </strong>
                        ¿Deseas un evento lleno de sabor? Nuestros 
                        restaurantes asociados ofrecen una experiencia 
                        gastronómica inigualable.
                    </li>
                    <li>
                        <strong>Bar: </strong>
                        Si buscas un ambiente relajado y festivo, nuestros 
                        bares son la elección perfecta para eventos más 
                        informales.
                    </li>
                </ol>
                <h3>Precios Mínimos y máximos</h3>
                <p>
                    En "Eventos Gino", entendemos que el presupuesto es una 
                    consideración importante. Puedes filtrar tu búsqueda según 
                    tus necesidades financieras. Establece un precio mínimo y 
                    máximo para encontrar las opciones que se ajusten a tu 
                    presupuesto sin comprometer la calidad y el servicio.
                </p>
                <h3>Ubicación: Norte o Sur</h3>
                <p>
                    La ubicación es esencial. ¿Prefieres celebrar tu evento en 
                    el bullicioso corazón de la ciudad o en un rincón tranquilo? 
                    Clasificamos las locaciones en dos categorías: norte y sur, 
                    para ayudarte a encontrar la ubicación perfecta.
                </p>
                <h3>Búsqueda por palabra clave</h3>
                <p>
                    Si tienes una idea específica en mente o buscas algo 
                    único, puedes utilizar nuestra función de búsqueda por 
                    palabra clave. Simplemente ingresa palabras clave 
                    relacionadas con tu evento, como "boda romántica" o 
                    "conferencia de negocios", y te mostraremos las 
                    locaciones que se ajustan a tus criterios.
                </p>
                <p>
                    En "Eventos Gino", nuestro objetivo es simplificar la 
                    búsqueda de la locación perfecta para tu evento. Con 
                    nuestras categorías de búsqueda, opciones de precios, 
                    ubicaciones y búsqueda por palabra clave, estamos aquí 
                    para ayudarte a hacer realidad tus sueños de evento.
                </p>
                <p>
                    No importa qué tipo de evento estés planeando, confía 
                    en "Eventos Gino" para brindarte una variedad de 
                    opciones excepcionales y encontrar la locación que 
                    haga que tu evento sea inolvidable. ¡Deja que nosotros 
                    nos encarguemos de los detalles para que tú puedas 
                    disfrutar de tu día especial al máximo!
                </p>
            </div>
            <!--FINCAS-->
            <section class="locaciones opcion1 item" id="contOp1">
                <article>
                    <h2>Fincas</h2>
                    <p>
                        Cuentan con variedad de espacios versátiles y elegantes que se adaptan a cualquier necesidad,
                        Desde majestuosos salones principales con techos altos y detalles arquitectónicos únicos hasta espacios al aire libre.
                    </p>
                </article>

                <!--FINCA 1-->
                <div>
                    <h3>Vía a la Costa</h3>
                    <span class="picAndMap">
                        <img src="assets/images/finca1.JPG" alt="Finca de la vía a la Costa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1020685.5989436168!2d-81.03970165312504!3d-2.1332874999999913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d73310a737b9f%3A0xad422e7c1bbf7cff!2sLa%20finca!5e0!3m2!1sen!2sec!4v1698795908549!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </span>
                </div>

                <!--FINCA 2-->
                <div>
                    <h3>Nobol, vía Guayaquil</h3>
                    <span class="picAndMap">
                        <img src="assets/images/finca2.jpg" alt="Finca de Nobol">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37936.27375910012!2d-80.04159899472941!3d-1.9280356090130666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d0582114217df%3A0x9d45ff7cbf3ac362!2sFinca%20San%20Jos%C3%A9%20(Santa%20Narcisa%20de%20Jes%C3%BAs)!5e0!3m2!1sen!2sec!4v1698797029386!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </span>
                </div>
            </section>

            <!--SALONES-->
            <section class="locaciones opcion2 item">
                <article>
                    <h2>Salones</h2>
                    <p>
                        De ambiente sofisticado dada su atmósfera y contemporánea, con techos altos y decoración que combina elementos de cristal y luces cautivadoras.
                        De fácil acceso y ubicación privilegiada ideal para eventos que deseen combinar la comodidad de la ciudad con un ambiente elegante y exclusivo.
                    </p>
                </article>

                <!--SALÓN 1-->
                <div id="contOp2">
                    <h3>Guayaquil, sur</h3>
                    <span class="picAndMap">
                        <img src="assets/images/salon1.jpg" alt="Salón del sur de Guayaquil">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127578.84060067391!2d-80.04550317572253!3d-2.2144381483858844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d71d95aef7733%3A0xd2f1364cf703c941!2sSal%C3%B3n%20de%20Eventos%20%224%20Estrellas%22!5e0!3m2!1sen!2sec!4v1698798014973!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </span>
                </div>

                <!--SALÓN 2-->
                <div>
                    <h3>Guayaquil, norte</h3>
                    <span class="picAndMap">
                        <img src="assets/images/salon2.jpg" alt="Salón del norte de Guayaquil">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127587.01185029125!2d-80.05022764205934!3d-2.117411561961927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6d5dea13bca9%3A0xcea90a42e4b53f82!2sSalon%20de%20eventos%20Lirios!5e0!3m2!1sen!2sec!4v1698798287472!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                    </span>
                </div>
            </section>

            <!--RESTAURANTES-->
            <section class="locaciones opcion3">
                <article>
                    <h2>Restaurantes</h2>
                    <p>
                        De ambientes cálidos y acogedores, con decoraciones que combinan lo clásico y lo moderno de modo que se sienta como en casa desde que cruce las puertas.
                        Además de ser destino para cenas memorables y eventos especiales, ofrecemos espacios privados dedicados para asegurarse de que tu celebración sea inolvidable.
                    </p>
                </article>

                <!--RESTAURANTE 1-->
                <div>
                    <h3>Sauces 6</h3>
                    <span class="picAndMap">
                        <img src="assets/images/rest1.jpg" alt="Restaurante de Sauces 6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31896.61924788843!2d-79.92556799538497!3d-2.1238980622489527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6d46544bb1e9%3A0xd2658e5f78ffacd6!2sBistrot%20Sal%C3%B3n%20de%20Eventos%20y%20Banquetes%20en%20Guayaquil!5e0!3m2!1sen!2sec!4v1698799622963!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                    </span>
                </div>

                <!--RESTAURANTE 2-->
                <div>
                    <h3>Urdesa</h3>
                    <span class="picAndMap">
                        <img src="assets/images/rest2.jpg" alt="Restaurante de Urdesa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15947.882826633384!2d-79.92990863776045!3d-2.164848153877909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6d895b926e63%3A0x4dcca2c890b0db4d!2sRestaurante%20N&#39;Cubiertos!5e0!3m2!1sen!2sec!4v1698799974975!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                    </span>
                </div>
            </section>

            <!--CLUBES-->
            <section class="locaciones opcion4 item">
                <article>
                    <h2>Clubes</h2>
                    <p>
                        Para ambientes más animados y movidos desde el momento en que se cruzan las puertas.
                        Rodeados de diseños vanguardistas con iluminación espectacular y sistema de sonido ideal para cualquier atmósfera. 
                    </p>
                </article>

                <!--CLUB 1-->
                <div>
                    <h3>Atarazana</h3>
                    <span class="picAndMap">
                        <img src="assets/images/club1.jpg" alt="Club de Atarazana">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22553.583454544143!2d-79.90263981330746!3d-2.173482075958905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6dc89f891a0b%3A0xfa9340e29a7358a2!2sClub%20Atarazana!5e0!3m2!1sen!2sec!4v1698800626804!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                    </span>
                </div>

                <!--CLUB 2-->
                <div>
                    <h3>Av. Simón Bolívar</h3>
                    <span class="picAndMap">
                        <img src="assets/images/club2.jpeg" alt="Club de Urdesa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7973.749206353908!2d-79.88765323507154!3d-2.2010799417319062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6e6456464aa9%3A0xd3d0cf22089d9149!2sClub%20de%20la%20Uni%C3%B3n!5e0!3m2!1sen!2sec!4v1698800924034!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                    </span>
                </div>
            </section>
        </main>

        <script src="assets/js/validacionesLocacionesForm.js"></script> 
    </body>
   
</html>
<?php require_once FOOTER; ?>