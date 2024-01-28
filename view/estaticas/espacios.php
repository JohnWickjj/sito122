<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="author" content="GINO ALEXANDER AVILÉS ROMERO">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Locaciones/Eventos Gino</title>
        <link rel="stylesheet" type="text/css" href="stylesLocaciones.css">  
        <!--ESTILO DE HOJA INTERNA-->

    </head>
    <!--ELEMENTO BODY-->
    <body onload="gallery()">
        <!--ETIQUETA SEMÁNTICA SECTION / TITULAR DE LOCACIONES-LOCALES-->
        <section id="titular">
            <h2 style="color:rgb(15, 78, 129);font-size:45px;">Locaciones</h2>
            <h3>A continuación, disponemos de los siguientes espacios físicos disponibles para cotizaciones:</h3>
        </section>

        <!--ETIQUETA SEMÁNTICA MAIN / LOCACIONES-->
        <main>
            <!--FINCAS-->
            <section class="locaciones">
                <article id="fincas">
                    <h2>Fincas</h2>
                    <p>
                        Cuentan con variedad de espacios versátiles y elegantes que se adaptan a cualquier necesidad,
                        Desde majestuosos salones principales con techos altos y detalles arquitectónicos únicos hasta espacios al aire libre.
                    </p>
                </article>

                <!--FINCA 1-->
                <div>
                    <h3>Vía a la Costa</h3>
                    <span class="picAndMap" id="finca1" onmouseover="cambiar(this)" onmouseout="restaurar(this)">
                        <img src="assets/images/finca1.JPG" alt="Finca de la vía a la Costa" id="f1-1">
                        <img src="assets/images/finca1-2.jpg" alt="Imagen 2 de la finca de la vía a la Costa" id="f1-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1020685.5989436168!2d-81.03970165312504!3d-2.1332874999999913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d73310a737b9f%3A0xad422e7c1bbf7cff!2sLa%20finca!5e0!3m2!1sen!2sec!4v1698795908549!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </span>
                </div>

                <!--FINCA 2-->
                <div>
                    <h3>Nobol, vía Guayaquil</h3>
                    <span class="picAndMap" id="finca2" onmouseover="cambiar(this)" onmouseout="restaurar(this)">
                        <img src="assets/images/finca2.jpg" alt="Finca de Nobol" id="f2-1">
                        <img src="assets/images/finca2-2.jpg" alt="Imagen 2 de la finca de Nobol" id="f2-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37936.27375910012!2d-80.04159899472941!3d-1.9280356090130666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d0582114217df%3A0x9d45ff7cbf3ac362!2sFinca%20San%20Jos%C3%A9%20(Santa%20Narcisa%20de%20Jes%C3%BAs)!5e0!3m2!1sen!2sec!4v1698797029386!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </span>
                </div>
            </section>

            <!--SALONES-->
            <section class="locaciones">
                <article id="locaciones">
                    <h2>Salones</h2>
                    <p>
                        De ambiente sofisticado dada su atmósfera y contemporánea, con techos altos y decoración que combina elementos de cristal y luces cautivadoras.
                        De fácil acceso y ubicación privilegiada ideal para eventos que deseen combinar la comodidad de la ciudad con un ambiente elegante y exclusivo.
                    </p>
                </article>

                <!--SALÓN 1-->
                <div>
                    <h3>Guayaquil, sur</h3>
                    <span class="picAndMap" id="salon1" onmouseover="cambiar(this)" onmouseout="restaurar(this)">
                        <img src="assets/images/salon1.jpg" alt="Salón del sur de Guayaquil" id="s1-1">
                        <img src="assets/images/salon1-2.jpg" alt="Imagen 2 del salón del sur" id="s1-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127578.84060067391!2d-80.04550317572253!3d-2.2144381483858844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d71d95aef7733%3A0xd2f1364cf703c941!2sSal%C3%B3n%20de%20Eventos%20%224%20Estrellas%22!5e0!3m2!1sen!2sec!4v1698798014973!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </span>
                </div>

                <!--SALÓN 2-->
                <div>
                    <h3>Guayaquil, norte</h3>
                    <span class="picAndMap" id="salon2" onmouseover="cambiar(this)" onmouseout="restaurar(this)">
                        <img src="assets/images/salon2.jpg" alt="Salón del norte de Guayaquil" id="s2-1">
                        <img src="assets/images/salon2-2.jpg" alt="Imagen 2 del salón del norte" id="s2-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127587.01185029125!2d-80.05022764205934!3d-2.117411561961927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6d5dea13bca9%3A0xcea90a42e4b53f82!2sSalon%20de%20eventos%20Lirios!5e0!3m2!1sen!2sec!4v1698798287472!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                    </span>
                </div>
            </section>

            <!--RESTAURANTES-->
            <section class="locaciones">
                <article id="restaurantes">
                    <h2>Restaurantes</h2>
                    <p>
                        De ambientes cálidos y acogedores, con decoraciones que combinan lo clásico y lo moderno de modo que se sienta como en casa desde que cruce las puertas.
                        Además de ser destino para cenas memorables y eventos especiales, ofrecemos espacios privados dedicados para asegurarse de que tu celebración sea inolvidable.
                    </p>
                </article>

                <!--RESTAURANTE 1-->
                <div>
                    <h3>Sauces 6</h3>
                    <span class="picAndMap" id="rest1" onmouseover="cambiar(this)" onmouseout="restaurar(this)">
                        <img src="assets/images/rest1.jpg" alt="Restaurante de Sauces 6" id="r1-1">
                        <img src="assets/images/rest1-2.jpg" alt="Imagen 2 de restaurante de Sauces" id="r1-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31896.61924788843!2d-79.92556799538497!3d-2.1238980622489527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6d46544bb1e9%3A0xd2658e5f78ffacd6!2sBistrot%20Sal%C3%B3n%20de%20Eventos%20y%20Banquetes%20en%20Guayaquil!5e0!3m2!1sen!2sec!4v1698799622963!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                    </span>
                </div>

                <!--RESTAURANTE 2-->
                <div>
                    <h3>Urdesa</h3>
                    <span class="picAndMap" id="rest2" onmouseover="cambiar(this)" onmouseout="restaurar(this)">
                        <img src="assets/images/rest2.jpg" alt="Restaurante de Urdesa" id="r2-1">
                        <img src="assets/images/rest2-2.jpg" alt="Imagen 2 de restaurante de Urdesa" id="r2-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15947.882826633384!2d-79.92990863776045!3d-2.164848153877909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6d895b926e63%3A0x4dcca2c890b0db4d!2sRestaurante%20N&#39;Cubiertos!5e0!3m2!1sen!2sec!4v1698799974975!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                    </span>
                </div>
            </section>

            <!--CLUBES-->
            <section class="locaciones">
                <article id="clubes">
                    <h2>Clubes</h2>
                    <p>
                        Para ambientes más animados y movidos desde el momento en que se cruzan las puertas.
                        Rodeados de diseños vanguardistas con iluminación espectacular y sistema de sonido ideal para cualquier atmósfera. 
                    </p>
                </article>

                <!--CLUB 1-->
                <div>
                    <h3>Atarazana</h3>
                    <span class="picAndMap" id="club1" onmouseover="cambiar(this)" onmouseout="restaurar(this)">
                        <img src="assets/images/club1.jpg" alt="Club de Atarazana" id="c1-1">
                        <img src="assets/images/club1-2.jpg" alt="Imagen 2 del club de Atarazana" id="c1-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22553.583454544143!2d-79.90263981330746!3d-2.173482075958905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6dc89f891a0b%3A0xfa9340e29a7358a2!2sClub%20Atarazana!5e0!3m2!1sen!2sec!4v1698800626804!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                    </span>
                </div>

                <!--CLUB 2-->
                <div>
                    <h3>Av. Simón Bolívar</h3>
                    <span class="picAndMap" id="club2" onmouseover="cambiar(this)" onmouseout="restaurar(this)">
                        <img src="assets/images/club2.jpeg" alt="Club de Urdesa" id="c2-1">
                        <img src="assets/images/club2-2.jpg" alt="Imagen 2 del club de la Av. Simón Bolívar" id="c2-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7973.749206353908!2d-79.88765323507154!3d-2.2010799417319062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6e6456464aa9%3A0xd3d0cf22089d9149!2sClub%20de%20la%20Uni%C3%B3n!5e0!3m2!1sen!2sec!4v1698800924034!5m2!1sen!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
                    </span>
                </div>
            </section>

            <!--ENTRADA A FORM-->
            <section>
                <div>
                    <h2>Buscador de locaciones</h2>
                    <div id="container">
                        <p>
                            Haciendo uso del buscador puedes tomar en cuenta las locaciones las cuales disponemos con una variedad de opciones a elegir 
                        </p>
                        <p>
                            <img src="assets/images/location-icon.png" style="height:150px;width:150px;" alt="Ícono de locación">
                        </p>
                    </div>
                    <a href="LocacionesForm.html" style="text-decoration:none;font-family:Arial, Helvetica, sans-serif;background-color:rgb(15, 78, 129);border-radius:10%;padding:5px;color:white;">
                        Buscar
                    </a>
                </div>
            </section>
        </main>
        <script 
        src="assets/js/validacionLocaciones.js">
    </script> 
    </body>
</html>

<?php require_once FOOTER; ?>