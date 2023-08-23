<?php

    require __DIR__ . "/includes/funciones.php";
    $consulta = obtener_bd();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>

    <header class="header contenedor">
            <h1>GT CLUB</h1>
            <nav>
                <a href="#">DTM</a>
                <a href="#">GT WORLD</a>
                <a href="#">24 HOURS</a>
            </nav>
    </header>

    <section class="contenedor-patrocinadores">
        <picture>
            <source srcset="build/img/patrocinadores/adac.avif" type="img/avif">
            <source srcset="build/img/patrocinadores/adac.webp" type="img/patrocinadores/webp">
            <img src="build/img/patrocinadores/adac.png" loading="lazy" width="200" height="300" alt="Albert costa">
        </picture>

        <picture class="">
            <source srcset="build/img/albertCostaBalboa.avif" type="img/avif">
            <source srcset="build/img/albertCostaBalboa.webp" type="img/webp">
            <img src="build/img/albertCostaBalboa.png" loading="lazy" width="200" height="300" alt="Albert costa">
        </picture>

        <picture>
            <source srcset="build/img/patrocinadores/autohero.avif">
            <source srcset="build/img/patrocinadores/autohero.webp">
            <img src="build/img/patrocinadores/autohero.png" alt="autohero">
        </picture>
        <picture>
            <source srcset="build/img/patrocinadores/bwt.avif" type="avif">
            <source srcset="build/img/patrocinadores/bwt.webp" type="webp">
            <img src="build/img/patrocinadores/bwt.png" alt="bwt">
        </picture>
        <picture>
            <source srcset="build/img/patrocinadores/dekra.avif">
            <source srcset="build/img/patrocinadores/dekra.webp">
            <img src="build/img/patrocinadores/dekra.png" alt="adac">
        </picture>
        <picture>
            <source srcset="build/img/patrocinadores/ig.avif">
            <source srcset="build/img/patrocinadores/ig.webp">
            <img src="build/img/patrocinadores/ig.png" alt="adac">
        </picture>
        <picture>
            <source srcset="build/img/patrocinadores/pirelli.avif">
            <source srcset="build/img/patrocinadores/pirelli.webp">
            <img src="build/img/patrocinadores/pirelli.png" alt="adac">
        </picture>
        <picture>
            <source srcset="build/img/patrocinadores/schaeffler.avif">
            <source srcset="build/img/patrocinadores/schaeffler.webp">
            <img src="build/img/patrocinadores/schaeffler.png" alt="adac">
        </picture>

    </section>

    <section class="contenedor-video">
        <div class="overlay">
            <div class="contenedor contenido-video">
                <h1>Precios bajos con descuentos para familias</h1>
                <h2>ENTRADAS DTM YA A LA VENTA</h2>
                <H3>Compra tus tickets ahora</H3>
            </div>
        </div>
        <video autoplay muted loop src="dtm.mp4"></video>
    </section>

    <section class="contenedor-descripcion contenedor">
        <div class="descripcion--grid">
            <h1>Que es la DTM?</h1>
            <h2>Competicion desde el 2000</h2>
            <p>La DTM es un campeonato de carreras de automóviles de turismo que se originó en Alemania en 1984. Se caracteriza por vehículos altamente modificados de marcas reconocidas y emocionantes carreras en circuitos famosos. Ha ganado popularidad internacional y atrae a pilotos talentosos de todo el mundo.</p>    
        </div>

        <picture>
            <source srcset="build/img/fotos/horizontal2.jpeg" type="imagen/jpeg">
            <source srcset="build/img/fotos/horizontal2.jpeg" type="imagen/jpeg">
            <img src="build/img/fotos/horizontal2.avif" loading="lazy" width="200" height="300" alt="horizontal2">
        </picture>

    </section>

    <section class="contenedor-pilotos">
        <h1>Pilotos</h1>

        <div class="grid-pilotos contenedor">
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Albert Costa <span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/albertCostaBalboa.avif" type="imagen/avif">
                        <source srcset="build/img/albertCostaBalboa.webp" type="imagen/webp">
                        <img src="build/img/albertCostaBalboa.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Alessio Deleda<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/alessioDeledda.avif" type="imagen/avif">
                        <source srcset="build/img/alessioDeledda.webp" type="imagen/webp">
                        <img src="build/img/alessioDeledda.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Arjun Maini<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/arjunMaini.avif" type="imagen/avif">
                        <source srcset="build/img/arjunMaini.webp" type="imagen/webp">
                        <img src="build/img/arjunMaini.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Ayhan Guven<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/ayhancanGuven.avif" type="imagen/avif">
                        <source srcset="build/img/ayhancanGuven.webp" type="imagen/webp">
                        <img src="build/img/ayhancanGuven.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Christian Engelhart<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/christianEngelhart.avif" type="imagen/avif">
                        <source srcset="build/img/christianEngelhart.webp" type="imagen/webp">
                        <img src="build/img/christianEngelhart.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Clemen Schmid<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/clemensSchmid.avif" type="imagen/avif">
                        <source srcset="build/img/clemensSchmid.webp" type="imagen/webp">
                        <img src="build/img/clemensSchmid.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>David Schumacher<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/davidSchumacher.avif" type="imagen/avif">
                        <source srcset="build/img/davidSchumacher.webp" type="imagen/webp">
                        <img src="build/img/davidSchumacher.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Dennis Olsen<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/dennisOlsen.avif" type="imagen/avif">
                        <source srcset="build/img/dennisOlsen.webp" type="imagen/webp">
                        <img src="build/img/dennisOlsen.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Dies Vanthoor<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/diesVanthoor.avif" type="imagen/avif">
                        <source srcset="build/img/diesVanthoor.webp" type="imagen/webp">
                        <img src="build/img/diesVanthoor.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Franck Perera<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/franckPerera.avif" type="imagen/avif">
                        <source srcset="build/img/franckPerera.webp" type="imagen/webp">
                        <img src="build/img/franckPerera.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Jack Altken<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/jackAltken.avif" type="imagen/avif">
                        <source srcset="build/img/jackAltken.webp" type="imagen/webp">
                        <img src="build/img/jackAltken.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Jusuf Owega<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/jusufOwega.avif" type="imagen/avif">
                        <source srcset="build/img/jusufOwega.webp" type="imagen/webp">
                        <img src="build/img/jusufOwega.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Kevin Van Der Line<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/KevinVanDerLine.avif" type="imagen/avif">
                        <source srcset="build/img/KevinVanDerLine.webp" type="imagen/webp">
                        <img src="build/img/KevinVanDerLine.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Laurin Heinrich<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/laurinHeinrich.avif" type="imagen/avif">
                        <source srcset="build/img/laurinHeinrich.webp" type="imagen/webp">
                        <img src="build/img/laurinHeinrich.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Luca Engstler<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/lucaEngstler.avif" type="imagen/avif">
                        <source srcset="build/img/lucaEngstler.webp" type="imagen/webp">
                        <img src="build/img/lucaEngstler.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Lucas Auer<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/lucasAuer.avif" type="imagen/avif">
                        <source srcset="build/img/lucasAuer.webp" type="imagen/webp">
                        <img src="build/img/lucasAuer.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Luca Stolz<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/lucaStolz.avif" type="imagen/avif">
                        <source srcset="build/img/lucaStolz.webp" type="imagen/webp">
                        <img src="build/img/lucaStolz.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Alessio Deleda<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/alessioDeledda.avif" type="imagen/avif">
                        <source srcset="build/img/alessioDeledda.webp" type="imagen/webp">
                        <img src="build/img/alessioDeledda.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Marco Wittmann<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/marcoWittmann.avif" type="imagen/avif">
                        <source srcset="build/img/marcoWittmann.webp" type="imagen/webp">
                        <img src="build/img/marcoWittmann.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Maro Engel<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/maroEngel.avif" type="imagen/avif">
                        <source srcset="build/img/maroEngel.webp" type="imagen/webp">
                        <img src="build/img/maroEngel.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Mattia Drudi<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/mattiaDrudi.avif" type="imagen/avif">
                        <source srcset="build/img/mattiaDrudi.webp" type="imagen/webp">
                        <img src="build/img/mattiaDrudi.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Mick Wishofer<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/mickWishofer.avif" type="imagen/avif">
                        <source srcset="build/img/mickWishofer.webp" type="imagen/webp">
                        <img src="build/img/mickWishofer.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Mirko Bortolotti<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/mirkoBortolotti.avif" type="imagen/avif">
                        <source srcset="build/img/mirkoBortolotti.webp" type="imagen/webp">
                        <img src="build/img/mirkoBortolotti.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Patric Niederhauser<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/patricNiederhauser.avif" type="imagen/avif">
                        <source srcset="build/img/patricNiederhauser.webp" type="imagen/webp">
                        <img src="build/img/patricNiederhauser.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Rene Rast<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/reneRast.avif" type="imagen/avif">
                        <source srcset="build/img/reneRast.webp" type="imagen/webp">
                        <img src="build/img/reneRast.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Ricardo Feller<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/ricardoFeller.avif" type="imagen/avif">
                        <source srcset="build/img/ricardoFeller.webp" type="imagen/webp">
                        <img src="build/img/ricardoFeller.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Sheldon Van Der Line<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/sheldonVanDerLine.avif" type="imagen/avif">
                        <source srcset="build/img/sheldonVanDerLine.webp" type="imagen/webp">
                        <img src="build/img/sheldonVanDerLine.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Thierry Vermeulen<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/thierryVermeulen.avif" type="imagen/avif">
                        <source srcset="build/img/thierryVermeulen.webp" type="imagen/webp">
                        <img src="build/img/thierryVermeulen.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
            <div class="carta-piloto">
                <div class="carta-piloto_grid">
                    <h1>Thomas Preining<span>33</span></h1>
                    <picture class="">
                        <source srcset="build/img/thomasPreining.avif" type="imagen/avif">
                        <source srcset="build/img/thomasPreining.webp" type="imagen/webp">
                        <img src="build/img/thomasPreining.png" loading="lazy" width="200" height="300" alt="Albert costa">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="circuitosPHP">
        <h1>Circuitos</h1>
        <div class="grid__circuitosPHP">
        <?php
            while($servicio = mysqli_fetch_assoc($consulta)){?>
                <div class="conetenedor__circuitosPHP">
                    <p class="nombre__circuito"><?php echo $servicio['nombre']; ?></p>
                    <p class="fecha__circuito"><?php echo $servicio['fecha']; ?></p>
                    <ul>
                    <li>
                        <p class="km__circuito"><?php echo $servicio['km'] . ' Metros'; ?></p>
                    </li>
                    <li>
                    <p class="pais_circuito"><?php echo $servicio['pais']; ?></p>
                    </li>
                </ul>

                </div>
            <?php } ?>
        </div>
    </section>

    <section class="contenedor--circuitos_completo ">
        <h1>Foto Fan</h1>
        <div class="contenedor-circuitos">
            <picture>
                <source srcset="build/img/fotos/vertical1.avif" type="imagen/avif">
                <source srcset="build/img/fotos/vertical1.webp" type="imagen/webp">
                <img src="build/img/fotos/vertical1.avif" alt="vertical1.avif">
            </picture>
            <picture>
                <source srcset="build/img/fotos/vertical1.avif" type="imagen/avif">
                <source srcset="build/img/fotos/vertical1.webp" type="imagen/webp">
                <img src="build/img/fotos/vertical1.avif" alt="vertical1.avif">
            </picture>
            <picture>
                <source srcset="build/img/fotos/vertical1.avif" type="imagen/avif">
                <source srcset="build/img/fotos/vertical1.webp" type="imagen/webp">
                <img src="build/img/fotos/vertical1.avif" alt="vertical1.avif">
            </picture>
            <picture>
                <source srcset="build/img/fotos/vertical1.avif" type="imagen/avif">
                <source srcset="build/img/fotos/vertical1.webp" type="imagen/webp">
                <img src="build/img/fotos/vertical1.avif" alt="vertical1.avif">
            </picture>
            <picture>
                <source srcset="build/img/fotos/vertical1.avif" type="imagen/avif">
                <source srcset="build/img/fotos/vertical1.webp" type="imagen/webp">
                <img src="build/img/fotos/vertical1.avif" alt="vertical1.avif">
            </picture>
        </div>
    </section>



    <footer class="contenedor--footer">
        <H1>Esto es el foofffter</H1>
    </footer>



    <link rel="stylesheet" href="src/js/app.js">
</body>
</html>