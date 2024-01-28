<?php require_once HEADER; ?>
        
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="JHON JAIRO CUEVA TUMBACO">
        <title>Servicios/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="assets/css/stylesServicios.css"> 


    </head>
    <!--Body-->
    <body>
        
    <?php     
              $image = "assets/images/";
        ?>
    
    <main>
        <section>
            <div class="content">
                <h4>En eventos Gino, nos apasiona organizar eventos que sean inolvidables. 
                    Contamos con un equipo de profesionales con amplia experiencia en el sector, 
                    que se encargará de cuidar todos los detalles para que su evento sea un éxito.</h4>
                <article class="importante">
                    <h2 style="text-align: center;">Aprovecha estos servicios</h2>
                    <div class="image-aside">
                        <img src=<?php echo $image . '/servicio.jpeg'; ?> alt="Eventos de Servicios">
                        <aside>
                            <div class="absid">
                                <p style="line-height: 1.5;margin-bottom: 50px;">¡Adquiere todas nuestras novedades y mantente al día!</p>
                                <a style="text-decoration: none;margin-top: 250px;margin-bottom: 150px;" href="index.php?p=Suscribirse" class="sub">
                                    SUSCRÍBETE AHORA
                                </a>
                            </div>
                        </aside>
                    </div>
                </article>
            </div>
            
            <article id="eventos_tipos">
            <div class="toma1">
                <h2>Eventos</h2>
                <ul class="lista-horizontal">
                    <li>
                        <img src=<?php echo $image . 'evento-corporativo.jpg'; ?> alt="Eventos corporativos">
                        <div class="texto">
                            <h3>Eventos corporativos</h3>
                            <p>Para empresas de todos los tamaños.</p>
                            <ul style="padding-left: 20px;">
                                <li>Convenciones y ferias</li>
                                <li>Presentaciones de productos</li>
                                <li>Conferencias y charlas</li>
                                <li>Talleres y congresos</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <img src=<?php echo $image . 'evento-social.png';?> alt="Eventos sociales">
                        <div class="texto">
                            <h3>Eventos sociales</h3>
                            <p>Para celebrar los momentos más importantes.</p>
                            <ul style="padding-left: 20px;">
                                <li>Ceremonias y Recepciones</li>
                                <li>Fiestas de XV años</li>
                                <li>Bautizos, Bodas, Comuniones</li>
                                <li>Reuniones familiares</li>
                                <li>Fiestas de Cumpleaños</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <img src=<?php echo $image . 'evento-deportivo.png';?> alt="Eventos deportivos">
                        <div class="texto">
                            <h3>Eventos deportivos</h3>
                            <p>Para aficionados de todas las edades.</p>
                            <ul style="padding-left: 20px;">
                                <li>Torneos</li>
                                <li>Competencias</li>
                                <li>Premiaciones</li>
                                <li>Apertura y Cierre de temporada</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <img src=<?php echo $image . 'evento-infantil.jpg';?> alt="Eventos infantiles">
                        <div class="texto">
                            <h3>Eventos infantiles</h3>
                            <p>Para que la pasen de maravillas los pequeños desde los 4 a 12 años.</p>
                            <ul style="padding-left: 20px;">
                                <li>Fiestas de cumpleaños</li>
                                <li>Fiestas de fin de curso</li>
                                <li>Matinés y temáticas</li>
                                <li>Fiestas del Día del Niño</li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
            </div>
            </article>
            <article id="alimentacion">
            <div class="toma2">
                <h2>Alimentacion</h2>
                <ul class="lista-horizontal">
                    <li>
                        <img src=<?php echo $image . 'catering.jpg';?> alt="Catering">
                        <div class="texto">
                            <h3>Catering</h3>
                            <p>Para empresas de todos los tamaños.</p>
                        </div>
                    </li>
                    <li>
                        <img src=<?php echo $image . 'mesas-decora.jpeg';?> alt="Decoraciónes de Mesas y banquetes">
                        <div class="texto">
                            <h3>Decoración de mesas y banquetes</h3>
                            <p>Un toque de elegancia y sofisticación para tu evento.</p>
                        </div>
                    </li>
                    <li>
                        <img src=<?php echo $image . 'personal-servicio.jpg';?> alt="Contratación de personal">
                        <div class="texto">
                            <h3>Contratación de personal de servicio</h3>
                            <p>No te preocupes por nada, nosotros nos encargamos de todo un equipo profesional a tu servicio.</p>
                        </div>
                    </li>

                </ul>
            </div>
            </article>


            <article id="experiencias">
            <div class="toma3">
                <h2>Experiencias únicas</h2>
                <ul class="lista-horizontal">
                    <li>
                        <img src=<?php echo $image . 'despedida-vip.jpeg';?> alt="Despedida de soltero/soltera">
                        <div class="texto">
                            <h3>Despedida de soltero/soltera</h3>
                            <p>¡Celebra tu despedida de soltero/soltera con un show que no olvidarás!.</p>
                        </div>
                    </li>
                    <li>
                        <img src=<?php echo $image . 'artistas-vip.jpg';?> alt="Eventos con artistas">
                        <div class="texto">
                            <h3>Show con artirtas</h3>
                            <p>Un día de diversión y risas con los mejores artistas.</p>
                        </div>
                    </li>
                    

                </ul>
            </div>
            </article>

            <article id="infraestructura">
            <div class="toma4">
                <h2>Infraestructura</h2>
                <ul class="lista-horizontal">
                    <li>
                        <img src=<?php echo $image . 'salones-servicios.jpg';?> alt="Alquiler de espacios">
                        <div class="texto">
                            <h3>Alquiler de espacios para eventos</h3>
                            <p>Un lugar perfecto para los eventos únicos en espacios exclusivos.</p>
                        </div>
                    </li>
                    <li>
                        <img src=<?php echo $image . 'iluminacion-servicio.jpg';?> alt="Iluminación y sonido">
                        <div class="texto">
                            <h3>Iluminación y sonido para eventos</h3>
                            <p>Transformamos tu evento en un espectáculo y vive una experiencia audiovisual única.</p>
                        </div>
                    </li>
                    <li>
                        <img src=<?php echo $image . 'montaje-escenario-servicio.jpg';?> alt="Escenarios y tarimas">
                        <div class="texto">
                            <h3>Escenarios y tarimas</h3>
                            <p>Un evento inolvidable en un escenario inolvidable.</p>
                        </div>
                    </li>

                    <li>
                        <img src=<?php echo $image . 'decoraciones-de-eventos.jpg';?> alt="Decoración y ambientación de espacios">
                        <div class="texto">
                            <h3>Decoración y ambientación de espacios para eventos</h3>
                            <p>Decoramos con un toque de magia y encanto para tu evento.</p>
                        </div>
                    </li>

                </ul>
            </div>
            </article>

            <article id="otros_servicios">
            <div class="toma5">
                <h2>Otros servicios</h2>
                <ul class="lista-horizontal">
                    <li>
                        <img src=<?php echo $image . 'logistica-servicio.jpeg';?> alt="Logística y transporte">
                        <div class="texto">
                            <h3>Logística y transporte para eventos</h3>
                            <p>Tu evento, en el lugar y el momento perfecto.</p>
                        </div>
                    </li>
                    <li>
                        <img src=<?php echo $image . 'seguridad-servicios.jpg';?> alt="Seguridad y vigilancia">
                        <div class="texto">
                            <h3>Seguridad y vigilancia para eventos</h3>
                            <p>Tu evento, seguro y protegido.</p>
                        </div>
                    </li>
                    <li>
                        <img src=<?php echo $image . 'Fotografia.jpeg';?> alt="Fotografía">
                        <div class="texto">
                            <h3>Fotografía y grabación de eventos</h3>
                            <p>Tu evento, enmarcado para ver y recordar.</p>
                        </div>
                    </li>
                    

                </ul>
            </div>
            
            </article>
            <article id="llamativo">
                <h2 class="anuncio" style="color: white;font-style: italic; font-size: 25px; "> Aprovecha !!</h2>
            <div class="rio" >
                <span style="font-style: italic; font-size: 25px; color: white;">¡Contáctanos hoy mismo para cotizar y obtener grandes ofertas!</span>
                    <p style="font-size: 18px;">No dudes en hacerlo!</p>
                    <a style="text-decoration: none;" href="index.php?p=Cotizar" class="sub">
                        COTIZA TU EVENTO
                    </a>                         
            </div>
            </article>
            
        

        </section>
        
        
    </main>
    <script src="assets/js/validacionesservicios.js"></script> 
    </body>
</html>
<?php require_once FOOTER; ?>