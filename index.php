<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> MERCOSUR </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <header>
    <a href="#" class="logo">
        <img src="img/logo/30logo.png" alt="" width="140" height="94" class="d-inline-block align-text-center">
        MERCOSUR
    </a>
    <ul>
        <li><a href="index.php">Menu</a></li>
        <li><a href="relacomercial.php">R. Comerciales</a></li>
        <li><a href="reladiplo.php">R. Diplomaticas</a></li>
        <li><a href="pais_extranjero.php">P. Extranjeros</a></li>
        <li><a href="pais_miembro.php">P. Miembros</a></li>
    </ul>
    </header>
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
  
    <!-- Page header-->

        <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/festividades/candelaria.jpg" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Fiesta de la Candelaria</h3>
                        <p>Tradicion Peruana</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/festividades/rio.jpg" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Festival de Rio</h3>
                        <p>Festividad Brasileña</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/festividades/ecuador.jpg" alt="..." />
                 <div class="carousel-caption d-none d-md-block">
                        <h3>Festival de Ecuador</h3>
                        <p>Festividad de Ecuador</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    <!-- Page Content-->
    <section class="py-5">
        <div id="top"class="container">
            <h1 class="mb-4" id="noticia"><span class="titu"> Últimas noticias</span></h1>
            <!-- Marketing Icons Section-->
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card h-100">
                        <h4 class="card-header">El MERCOSUR adopta medidas comerciales en el contexto del Covid-19</h4>
                        <div class="card-body">
                            <p class="card-text">
                                A fin de enfrentar la pandemia mundial por el covid-19, los países del MERCOSUR
                                adoptaron una serie de medidas comerciales, con el objetivo de proporcionar más
                                transparencia con respecto al comercio mientras dure la emergencia sanitaria.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="https://www.mercosur.int/el-mercosur-adopta-medidas-comerciales-en-el-contexto-del-covid-19/">Ver noticia</a></div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card h-100">
                        <h4 class="card-header">Convocatoria a Organizaciones de la Sociedad Civil para participar en la XXXVII Reunión de Altas Autoridades sobre Derechos Humanos del MERCOSUR (RAADH)</h4>
                        <div class="card-body">
                            <p class="card-text">La RAADDHH se realizará bajo la modalidad virtual, del 14 de mayo al 01 de junio de 2021.
                            </p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="https://www.mercosur.int/convocatoria-a-organizaciones-de-la-sociedad-civil-para-participar-en-la-xxxvii-reunion-de-altas-autoridades-sobre-derechos-humanos-del-mercosur-raadh/">Ver noticia</a></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100">
                        <h4 class="card-header">El MERCOSUR conmemora el Día Mundial de la Salud y Seguridad en el Trabajo.</h4>
                        <div class="card-body">
                            <p class="card-text">El Día Mundial de la Salud y Seguridad en el Trabajo se conmemora cada 28 de abril.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="https://www.mercosur.int/el-mercosur-conmemora-el-dia-mundial-de-la-salud-y-seguridad-en-el-trabajo/">Ver noticia</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-0" />
    <!-- Portfolio Section-->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4">Paises Partes</h2>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="img/banderas/argentina.png" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Argentina</a></h4>
                            <p class="card-text">Argentina es un país sudamericano de gran envergadura
                                con un terreno que incluye las montañas de los Andes, lagos glaciales y praderas en
                                las Pampas, la tierra tradicional de pastoreo de su famoso ganado.
                                El país es conocido por el baile y la música del tango. Su gran capital cosmopolita,
                                Buenos Aires, se centra en la Plaza de Mayo, rodeada por imponentes edificios del siglo
                                XIX,
                                como la Casa Rosada, el icónico palacio presidencial.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="img/banderas/brazil.png" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Brazil</a></h4>
                            <p class="card-text">Brasil es un vasto país de Sudamérica que se extiende desde
                                la Cuenca del Amazonas en el norte hasta los viñedos y las enormes cataratas del
                                Iguazú en el sur. Río de Janeiro, simbolizado por su estatua de 38 m del Cristo Redentor
                                sobre el cerro del Corcovado, es famoso por sus ajetreadas playas Copacabana e Ipanema,
                                junto con su enorme y estridente festival del Carnaval, que cuenta con carros
                                alegóricos,
                                exuberantes disfraces y danza y música samba.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="img/banderas/paraguay.png" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Paraguay</a></h4>
                            <p class="card-text">Paraguay es un país sin litoral que se encuentra entre Argentina,
                                Brasil y Bolivia,
                                con grandes extensiones de pantanos, bosques subtropicales y chaco, extensiones de
                                naturaleza que abarcan sabanas y matorrales.
                                La capital, Asunción, en las orillas del río Paraguay, alberga el gran Palacio de
                                Gobierno y el Museo del Barro,
                                que exhibe cerámicas precolombinas y encajes ñandutí, estos últimos disponibles en
                                muchas tiendas. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="img/banderas/Uruguay.png" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Uruguay</a></h4>
                            <p class="card-text">Uruguay es un país de Sudamérica
                                conocido por su interior verde y costa bordeada de playas.
                                La capital, Montevideo, se ubica en torno a la plaza Independencia,
                                donde alguna vez hubo una ciudadela española. Esta lleva a la Ciudad Vieja,
                                con edificios art deco, casas coloniales y el Mercado del Puerto con muchos
                                restaurantes de carnes. La Rambla es un paseo costero con puestos de pescados, muelles y
                                parques.</p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="img/banderas/venezuela.png" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Venezuela</a></h4>
                            <p class="card-text">Venezuela es un país de la costa norte de América del Sur, con diversas
                                atracciones naturales. A lo largo de su costa en el Caribe, hay islas turísticas
                                tropicales, entre ellas la Isla de Margarita y el archipiélago Los Roques. Al noroeste
                                está la cordillera de los Andes y la ciudad colonial de Mérida, una base para visitar el
                                Parque Nacional de la Sierra Nevada. Caracas, la capital, se encuentra en el norte. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-0" />
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4">Paises Asociados</h2>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="img/banderas/bolivia.png" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Bolivia</a></h4>
                            <p class="card-text">Bolivia es un país del centro de Sudamérica, con un terreno variado
                                desde los Andes, el Desierto de Atacama y el bosque pluvial en la cuenca del Amazonas. A
                                más de 3,500 m de altura, su capital administrativa, La Paz, se ubica en el Altiplano de
                                los Andes con el monte nevado Illimani de fondo. Cerca se encuentra el cristalino lago
                                Titicaca, el más grande del continente, que se extiende por la frontera con Perú. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="img/banderas/chile.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Chile</a></h4>
                            <p class="card-text">Chile es un país largo y angosto que se extiende por el borde
                                occidental de Sudamérica, con más de 6,000 km de costa en el océano Pacífico. Santiago,
                                su capital, se ubica en un valle rodeado de los Andes y la cordillera de la Costa. En la
                                Plaza de Armas de la ciudad, bordeada de palmeras, se encuentra la catedral neoclásica y
                                el Museo de Historia Nacional. El enorme Parque Metropolitano cuenta con piscinas, un
                                jardín botánico y un zoológico. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="img/banderas/colombia.png" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Colombia</a></h4>
                            <p class="card-text">Colombia es un país del extremo norte de Sudamérica. Su paisaje cuenta
                                con bosques tropicales, las montañas de los Andes y varias plantaciones de café. En
                                Bogotá, su capital a gran altura, el distrito Zona Rosa es famoso por sus restaurantes y
                                tiendas. Cartagena, en la costa del Caribe, tiene una Ciudad Antigua colonial
                                amurallada, un castillo del siglo XVI y arrecifes de coral cercanos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="img/banderas/ecuador.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Ecuador</a></h4>
                            <p class="card-text">Ecuador es un país que se extiende por el ecuador en la costa oeste de
                                Sudamérica. Sus diversos paisajes abarcan la selva del Amazonas, las zonas altas andinas
                                y las islas Galápagos de abundante fauna. En las laderas de los Andes, a una elevación
                                de 2,850 m, Quito, su capital, es famosa por su centro colonial español que se ha
                                conservado intacto por mucho tiempo, con palacios decorados del siglo XVI y XVII y
                                sitios religiosos, como la ornamentada Iglesia de la Compañía de Jesús.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="img/banderas/guyana.png" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Guyana</a></h4>
                            <p class="card-text">Guyana es un país de Sudamérica ubicado en la costa del Atlántico Norte
                                que se caracteriza por sus densos bosques tropicales. Su idioma oficial es el inglés y
                                cuenta con críquet y música calipso, además, se vincula culturalmente con la región del
                                Caribe. Su capital, Georgetown, es famosa por su arquitectura colonial británica,
                                incluida la alta catedral anglicana de San Jorge, de madera pintada. Un gran reloj
                                adorna la fachada del Mercado Stabroek, fuente de productos agrícolas locales. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="img/banderas/peru.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Peru</a></h4>
                            <p class="card-text">Perú es un país de Sudamérica que abarca una sección del bosque del
                                Amazonas y Machu Picchu, una antigua ciudad inca en las alturas de los Andes. La región
                                en torno a Machu Picchu, incluido el Valle Sagrado, el Camino del Inca y la ciudad
                                colonial de Cuzco, es rica en sitios arqueológicos. En la costa árida del Pacífico de
                                Perú se encuentra Lima, la capital, con un centro colonial preservado e importantes
                                colecciones de arte precolombino.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="img/banderas/surinam.png" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Surinam</a></h4>
                            <p class="card-text">Surinam​, oficialmente la República de Surinam ―antiguamente conocida
                                como Guayana Neerlandesa ―, es un país de América del Sur, situado al norte del
                                continente, que colinda con el océano Atlántico al norte, con el departamento de
                                ultramar francés de Guayana Francesa al este, con Guyana al oeste y con Brasil al sur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-0" />
    <!-- Features Section-->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-4"><span class="titu">Director de Mercosur</h2></span>
                    
                    <ul><span class="titu">
                        <li><strong>Eduardo Josue Velasquez Ruiz</strong></li>
                        <li><strong>Profesional con gran experiencia en desarrollo de software orientados a entorno web y mobile iOS. Ingeniero de Sistemas con Maestría en Gerencia de Proyectos.</strong></li>
                        <li><strong>Se ha desempeñado como Jefe de Desarrollo y líder de proyectos orientados a web.</strong></li>
                        <li><strong>Docente universitario con experiencia en pregrado y postgrado en la Universidad de Margarita (Venezuela) y como docente TC de la carrera diseño de software e integración de sistemas en el Instituto Superior TECSUP (Perú).</strong></li>
                        <li><strong>Certificado Scrum Developer y Scrum Master por ScrumStudy - Accreditation Body for Scrum.</strong></li>
                        <li><strong>Con alto sentido analítico, capacidades para solucionar problemas y liderazgo de equipos de trabajo.</strong></li>     
                    </ul></span>
                </div>
                <div class="col-lg-6"><img class="img-fluid rounded" src="img/director/profe.jpg" style="height: 400px; padding-left:150px"
                        alt="profe_tecsup" /></div>
            </div>
        </div>
    </section>
    <hr class="my-0" />
  
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Micaela Rojas, Alex Ramos, Martin Romani C24B III Ciclo</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>