<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="HTML, CSS, PHP, MySql, JavaScript, bootstrap, Rhino, 3dm, Design, Studios">
    <meta name="description" content="3dm design studios">
    <meta name="author" content="Ramiro Portas">
    <title>3dmdesignstudios</title>
    <link href="css/normalize.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/litebox.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/body.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/jqueryux.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-toolkit.min.js"></script>
    <script src="js/images-loaded.min.js" type="text/javascript"></script>
	<script src="js/litebox.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
</head>
<body>
	<div class="load">
    	<figure class="center">
        	<img src="img/loading/loading.gif" class="load-gif">
        </figure>
    </div>
    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide" style="height: 400px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!--Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!--image1-->
                <div class="fill" style=" background-image:url(img/slider/1.png);">
                </div>
                
            </div>
            <div class="item">
                <!--image2-->
                <div class="fill" style="background-image:url(img/slider/2.png);">
                </div>
                
            </div>
            <div class="item">
                <!--image3-->
                <div class="fill" style="background-image:url(img/slider/3.png);">
                </div>
                
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <nav id="nav-scroll" class="navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#FFF;border-color: rgba(0, 0, 0, 0.8); position:relative !important;-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.5);-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.5);box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.5);">
        <div class="container">
            <div class="navbar-header" style="background: rgba(0, 0, 0, 1);">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle" style=" border:none; background-color:rgb(255, 255, 255);">
                    <span class="sr-only negro">Toggle navigation</span>
                    <span class="icon-bar negro"></span>
                    <span class="icon-bar negro"></span>
                    <span class="icon-bar negro"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="border:none;">
            
                <ul class="nav navbar-nav" style="margin: 0px -15px;">
                	<li >
                    	<div class="animacion-nav"></div>
                        <a href="#myCarousel" class="nav-btn btn-1 a-nav">Inicio</a>
                    </li>
                    <li >
                    	<div class="animacion-nav"></div>
                        <a href="#Nosotros" class="nav-btn btn-2 a-nav">Nosotros</a>
                    </li >
                    <li>
                    	<div class="animacion-nav"></div>
                        <a href="#Servicios" class="nav-btn btn-3 a-nav">Servicios</a>
                    </li>
                    <li >
                    	<div class="animacion-nav"></div>
                        <a href="#Contactos" class="nav-btn btn-4 a-nav">Contactos</a>
                    </li>
                    <li >
                    	<div class="animacion-nav"></div>
                        <a href="#Fotos" class="nav-btn btn-5 a-nav">Fotos</a>
                    </li>
                    <li >
                    	<div class="animacion-nav"></div>
                        <a href="#Videos" class="a-nav nav-btn btn-6">Videos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <div id="pag" class="container">
    	<section>
            <!--introducción-->
            <br>
            <br>
            <figure>
            	<img src="img/logo/logo.png" id="logo" style="margin:auto; display:block;">
            </figure>
            <br>
        	<br>
            <h3 style="text-align:center;">Te damos a conocer una nueva visión de la web.</h3>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  espacios-p">
                    <p style="text-align:justify;">Somos una empresa con experiencia en el diseño y desarrollo de sitios web de alta calidad profesional. Nos encontramos en constante investigación de nuevas tecnologías, tendencias aplicadas a Internet que nos permiten progresar con nuestros clientes. El objetivo de 3dm Design Studios para nuestros clientes es lograr crear un sitio innovador entretenido y dinámico.</p>
                </div>
            </div>
            <br>
            <br>
            <div style="margin:auto; background-color:#000; width:70%; height:1px;"></div>
            <br>
            <br>
		</section>
        <section id="Nosotros">
            <!-- Profesionales-->
            <br>
            <br>
            <h1 style="text-align:center;">Profesionales</h1>
            <br>
            <br>
            <br>
            <div class="row" style="text-align:center;">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
               		<p style="text-align:justify;">
                    	<img src="img/perfiles/beta.png" class="img-circle" style="margin:auto; display:block;">
                        <br>
                        <br>
                    	<h2>Dulce Portas</h2>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>2009-2010 GRABATTO 1956 S.R.L.</h4>
                            <br>
                            Diseño de isologos, volantes, tarjetas personales,
                            cartelería y participaciones sociales. 
                            Realización de bajadas laser todo color, armados
                            de originales para termorelieve y cuño seco, 
                            sellos, cortes, calados de alta precisión y 
                            grabado sobre madera, vidrio, metal y cuero.
                            <br>
                            <br>
                            <a href="http://www.grabatto.com/" target="_blank">www.grabatto.com</a>
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>2009-2013 La Huella Sur Producciones Audiovisuales</h4>
                            <br>
                            Me encuentro trabajando de manera 
                            freelance, colaborando con en el área de servicios
                            gráficos, desde Abril de 2009.
                            <br>
                            <br>
                            <a href="http://www.lahuellasur.com.ar/" target="_blank">www.lahuellasur.com.ar</a>
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>2010 DESIRE TANGO</h4>
                            <br>
                            Desarrollo de Imagen para Obra Teatral 
                            "Forbidden Tango". Diseño de piezas 
                            editoriales, edición fotográfica, merchandising,
                            y marquesina teatral.
                            Teatro Astral (Av. Corrientes 1639), producción 
                            de Alejandro Ferreyra – Carlos 
                            Ferreyra.
                            <br>
                            <br>
                            <a href="http://www.forbiddentango.com.ar/" target="_blank">www.forbiddentango.com.ar</a>
                            <a href="http://www.tangodesire.com.ar/" target="_blank">www.tangodesire.com.ar</a>
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>2012-2013 PERVOI Heladerías</h4>
                            <br>
                            Diseñadora gráfica, encargada del departamento de
                            diseño y marketing, de la cadena de 
                            heladerías, Piacere-Pervoi, de la provincia de Chaco,
                            con sucursales en Buenos Aires.
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>2013 Germán Marti Productor Teatral.(Angel - Damián Mahler)</h4>
                            <br>
                            Diseñadora gráfica, encargada del desarrollo 
                            de imagen para diversas obras 
                            teatrales, y musicales. Diseño de piezas editoriales,
                            edición fotográfica, y marquesina teatral.
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>Baires Desing</h4>
                            <br>
                            Una micro empresa de decoradores y vidrieristas,
                            en la cual ejercía el cargo de Diseñadora Gráfica, 
                            en la modalidad Freelance. Realizando la tarea de 
                            bajadas de temáticas, a nivel gráfico y ploteado, 
                            entre los años 2008 y 2010.
                            <br>
                            <br>
                            <a href="https://www.facebook.com/bairesdesign" target="_blank">www.facebook.com/bairesdesign</a>
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>GOBIERNO DE LA CIUDAD DE BUENOS AIRES</h4>
                            <br>
                            Participación en exposición colectiva de 
                            Fileteado porteño
                            y restauración de murales públicos, en conjunto de 
                            Héctor Rapizarda (autor) y la República de Lugano.
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>2012-2013 3dm Design Studios</h4>
                            <br>
                            A la actualidad me encuentro trabajando en
                            proyectos particulares, como también en 
                            proyectos personales, como lo es 3DM Design Studio.
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>Seminarios y Jornadas</h4>
                            <br>
                            TMDG 2011 – Encuentro internacional de Diseño Gráfico
                            <a href="http://www.trimarchidg.net/" target="_blank">www.trimarchidg.net</a>
                            Mar del Plata / Argentina. (Octubre – 2011)
                            Conferencias exposiciones y workshops:
                            JEREMYVILLE 
                            DOUBLEYOU
                            IAN ANDERSON (DESIGNERS REPUBLIC)
                            DR ALDERETE
                            BIG ACTIVE
                            DAVID CARSON
                        </div>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 ">
                	<br>
                    <br>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 ">
               		<p style="text-align:justify;">
                    	<img src="img/perfiles/yo.png" class="img-circle" style="margin:auto; display:block;">
                        <br>
                        <br>
                    	<h2>Ramiro Portas</h2>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>2013 Germán Marti Productor Teatral.(Angel - Damián Mahler)</h4>
                            <br>
                            Diseñador 3D, delegado del desarrollo 
                            de mayados para poder aplicar diversas 
                            funciones: movimientos realístico de los personajes
                            deformaciones y efectos especiales 3D
                            para animaciones, o renders estáticos.
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>2012 Hard Rock Cafe-Proyecto Bolivar</h4>
                            <br>
                            Desarrollo de un Hotel Boutique, a partir de 
                            los planos estándar, aportando nuevas ideas en
                            diseño 3D de la arquitectura de interiores y
                            exteriores del rediseñado.
                            Aportando trabajos publicitarios web, brochure
                            merchandising poligonales 3D, cartel de Obra,
                            gigantografía,cartel de fachada, plano,
                            maquetados, modelado de logo y objetos 3D.
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>2011 Museo del Automóvil Casilda Santa Fe</h4>
                            <br>
                            Rediseñado exterior e interior del 
                            Dodge Polara GTX 1970-1979. Se realizaron
                            ilustraciones de mallados poligonales
                            en Rhinoceros 5.0, se crearon materiales
                            en v-ray para el renderizado final, 
                            se realizaron pruebas dinámica con 
                            respecto a la aerodinámicas y fuerza de 
                            rozamiento.
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>2012 3DM Design Studios</h4>
                            <br>
                            Siendo fundador del Estudio,
                            apasionadamente, cumplo la función
                            de programar, animar y diseñar.
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>2013 Germán Marti Productor Teatral.(Angel - Damián Mahler)</h4>
                            <br>
                            Diseñador gráfico 3D, encargado del desarrollo 
                            de imagen para diversas obras 
                            teatrales, y musicales. Diseño de piezas editoriales,
                            edición fotográfica, y marquesina teatral.
                        </div>
                        <br>
                        <br>
                        <h3>Conocimientos</h3>
                        <div class="exp">
                            <h4>Programación</h4>
                            <br>
                            HTML.<br>
                            Css.<br>
                            PHP.<br>
                            MySql.<br>
                            JavaScript.<br>
                            jQuery.<br>
                            Bootstrap.<br>
                            Google Maps JavaScript API.<br>
                            ActionScript.
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>Diseño 3D</h4>
                            <br>
                            Rhinoceros.<br>
                            V-ray.<br>
                            T-splines.<br>
                            ReallFlow.<br>
                            Vue xStream.
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>Diseño Gráfico</h4>
                            <br>
                            Photoshop.<br>
                            Illustrator.<br>
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>Animación</h4>
                            <br>
                            Flash.<br>
                            After Effects.<br>
                            Cinema 4D.<br>
                            3ds Max.<br>
                            Sound Booth.<br>
                            Sencha Animator.<br>
                            Edge Animate.
                        </div>
                        <br>
                        <br>
                        <div class="exp">
                            <h4>Web</h4>
                            <br>
                            Notepad++.<br>
                            Dreamweaver.<br>
                            Fireworks.
                        </div>
                    </p>
                </div>	
            </div>
            <br>
            <br>
            <br>
            <br>
            <div style="margin:auto; background-color:#000; width:70%; height:1px;"></div>
            <br>
            <br>
		</section>
        <section id="Servicios">
            <!-- Servicios-->
            <br>
            <br>
            <h2 style="text-align:center;">Nuestros Servicios</h2>
            <br>
            <br>
            <br>
			<div class="row">
            	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Papelera</h4>
                        <br>
                        -Diseño de tarjetas personales.<br>
                        -Diseño de hojas membretadas.<br>
                        -Diseño de sobres (inglés/bolsa).<br>
                        -Diseño de Carpetas Institucionales.
                    </div><br><br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Papelera Comercial</h4>
                        <br>
                        -Diseño de Factura.<br>
                        -Diseño de Remito.<br>
                        -Diseño de Formulario.
                    </div><br><br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Folletería</h4>
                        <br>
                        -Diseño de Flyer (Frente).<br>
                        -Diseño de Flyer (Frente y dorso).<br>
                        -Diseño de un folleto díptico.<br>
                        -Diseño de un folleto tríptico.
                    </div><br><br>
                </div>
            </div>
            <div class="row">
            	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Tarjetería</h4>
                        <br>
                        -Diseño de tarjetas de cumpleaños, bautismo y casamiento.<br>
                        -Diseño de invitaciones empresariales y tarjetas de fin de año.<br>
                        -Diseño de postales.
                    </div><br><br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Cartelería</h4>
                        <br>
                        -Diseño de un Afiche A3.<br>
                        -Diseño de Gigantografía / cartel para exteriores.<br>
                        -Diseño de Cartel de fachada.<br>
                        -Diseño de ploteado vehicular.<br>
                        -Diseño de ploteado para vidriera.
                    </div><br><br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Ilustraciones</h4>
                        <br>
                        -Ilustración a mano alzada más acabado final.<br>
                        -Ilustración vectorial para revista / folleto / web.<br>
                        -Ilustración 3D para revista / folleto / web.
                    </div><br><br>
                </div>
            </div>
            <div class="row">
            	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Editorial</h4>
                        <br>
                        -Diseño de Brochure (20 páginas).<br>
                        -Diseño de manual de instrucciones (6 páginas).<br>
                        -Diseño de menú para restaurante (6 páginas).<br>
                        -Diseño de Cd´s, tapas + interior.
                    </div><br><br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Merchandisign</h4>
                        <br>
                        -Diseño de Flyer (Frente).<br>
                        -Diseño de Flyer (Frente y dorso).<br>
                        -Diseño de un folleto díptico.<br>
                        -Diseño de un folleto tríptico.
                    </div><br><br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Publicidad</h4>
                        <br>
                        -Diseño de publicidad institucional para diario o revistas(1/4 página – 1/2 página).<br>
                        -Diseño de publicidad de producto para diario o revistas(1/4 página – 1/2 página).<br>
                        -Diseño de aviso página completa en diario o revista.
                    </div><br><br>
                </div>
            </div>
            <div class="row">
            	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Identidad (Imagen corporativa)</h4>
                        <br>
                        -Naming (Proceso definición de nombre de marca).<br>
                        -Identidad Corporativa (Logotipo / Isotipo / Aplicaciones básicas / Manual de normas).<br>
                        -Rediseño marca existente (Logotipo / Isotipo / Apli. básicas / Manual de normas).<br>
                        -Diseño de Identidad de un producto (consumo masivo).
                    </div><br><br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Fotografía</h4>
                        <br>
                        -Sesión fotográfica / 2 Horas / 1 cámara.<br>
                        -Foto de producto / Por unidad.<br>
                        -Escaneo digital / Por unidad.
                    </div><br><br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Señalética</h4>
                        <br>
                        -Señalización permanente de una institución / 10 piezas.<br>
                        -Señalización de un evento especial (Ej. Exposición) / 10 piezas.<br>
                    </div><br><br>
                </div>
            </div>
            <div class="row">
            	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Diseño 3D</h4>
                        <br>
                        -Modelado de logo.<br>
                        -Modelado de personaje estándar.<br>
                        -Modelado escenario.<br>
                        -Modelado plano.<br>
                        -Modelado de objetos.<br>
                        -Modelado libre.
                    </div><br><br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Website HTML</h4>
                        <br>
                        -INDEX (Diseño, maquetado html, programación).<br>
                        -Interface (Diseño, estructuración y diagrama de contenidos).<br>
                        -Página estándar<br>
                        (Solo diseño de contenidos a partir de tablas y títulos).<br>
                        -Formulario de contacto y extendidos<br>
                        (Programación y puesta en marcha).
                    </div><br><br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Website Flash</h4>
                        <br>
                        -Interface (Diagrama de contenidos, diseño, programación y animación).<br>
                        -Página estándar (diseño de contenidos simple y animación).<br>
                        -Página completa (Diseño de pantalla con textos, imágenes y programación).<br>
                        -Galería de imágenes o portfolio
                        (Concepto, diseño, programación y animación).<br>
                        -Galería de videos (Concepto, diseño, programación y animación).<br>
                        -Formulario de contacto y extendidos
                        (Programación y puesta en marcha.<br>
                        -Sonido ambiente y programación.<br>
                        -Efectos de sonido / Paquete de sonidos para el sitio / 20 Efectos.
                    </div><br><br>
                </div>
            </div>
            <div class="row">
            	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Animacíon Flash</h4>
                        <br>
                        -INTRO 15 segundos (Diseño, programación, 3D, animación y sonido).<br>
                        -INTRO 30 segundos (Diseño, programación, 3D, animación y sonido).<br>
                        -Banner animado estándar (Diseño y animación simple).<br>
                        -Banner animado complejo (Diseño, animación, programación.<br>
                        -Banner animado Full (Diseño, animación, programación, Incluye efectos 3D).
                    </div><br><br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="exp">
                        <h4>Video Digital</h4>
                        <br>
                        -INTRO 15 segundos (Diseño, programación, 3D, animación y sonido).<br>
                        -INTRO 30 segundos (Diseño, programación, 3D, animación y sonido).<br>
                        -Animacion 3D libre.<br>
                        -Animacion 3D realistico.<br>
                        -Edicion digital (efectos, textos, enfoques
                        y desenfoques , desenfoques por movimiento,
                        sombras, motion graphics, etc.
                    </div><br><br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div style="margin:auto; background-color:#000; width:70%; height:1px;"></div>
            <br>
            <br>
		</section>
        <section id="Contactos">
            <!-- Contacto-->
            <br>
            <br>
            <h2 style="text-align:center;">Contacto</h2>
            <br>
            <br>
            <br>
            <form role="form" method="post" id="contacto_form">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 espacios-p">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                        <br>
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                        <br>
                        <input type="text" class="form-control" placeholder="Teléfono" name="telefono">
                        <br>
                        <input type="email" class="form-control" placeholder="Correo" name="correo">
                        <br>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 espacios-p">
                        <textarea class="form-control" rows="9" id="comment" placeholder="Consulta" name="comentario"></textarea>
                    </div>
                </div>
                <br>
                <br>
                <button name="Enviar_Mail" class=" btn btn-default btn-lg" type="submit" style="margin:auto;display: block;">Enviar</button>
            </form>
            <?php
				$mail="contacto@3dmdesignstudios.tk, ramiro.portas@gmail.com";
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$telefono = $_POST['telefono'];
				$correo = $_POST['correo'];
				$comentario = $_POST['comentario'];
				$subject ="3dm design studios";
				$message ="
				Nombre:				".$nombre."
				Apellido:				".$apellido."
				Teléfono:				".$telefono."
				Correo:				".$correo."
				Consulta:				".$comentario."
				";
				if(isset($_POST['Enviar_Mail']))
				{
					if(@mail($mail, $subject, $message))
					{
						echo 
						'<script type="text/javascript">
							 $(document).ready(function(){
								$(\'body\').prepend(\'<div class="f_alert"><div class="m_alert"><h3>El mensaje ha sido enviado con éxito. En breve te responderemos.</h3></div></div>\');
								$(\'.f_alert\').delay(3000).fadeOut(500, function() {$(this).remove();});	
							});
						</script>';						
					}else{
						echo 
						'<script type="text/javascript">
							 $(document).ready(function(){
								$(\'body\').prepend(\'<div class="f_alert"><div class="m_alert"><h3>Se ha detectado un error al enviar tu mensaje, intenta nuevamente.</h3></div></div>\');
								$(\'.f_alert\').delay(3000).fadeOut(500, function() {$(this).remove();});	
							});
						</script>';	
					}
				}			
            ?>
            <br>
            <br>
            <br>
            <br>
            <div style="margin:auto; background-color:#000; width:70%; height:1px;"></div>
            <br>
            <br>
		</section>
        <section id="Fotos">
            <!-- Portfolio-->
            <br>
            <br>
            <h2 style="text-align:center;">Galería de Fotos</h2>
            <br>
            <br>
            <br>
            <div style="margin:auto; text-align:center;">
                <button id="btn_gal_1" class="gal btn btn-default" type="button" style="margin-right:30px;">Arquitectura</button>
                <button id="btn_gal_2" class="gal btn btn-default" type="button" style="margin-right:30px;">Editorial</button>
                <button id="btn_gal_3" class="gal btn btn-default" type="button" style="margin-right:30px;">Grabato</button>
				<div id="br">
                    <br>
                </div>
                <button id="btn_gal_4" class="gal btn btn-default" type="button" style="margin-right:30px;">Renders 3D</button>
                <button id="btn_gal_5" class="gal btn btn-default" type="button" style="margin-right:30px;">Manual Corporativo</button>
                <div id="br2">
                    <br>
                </div>
                <button id="btn_gal_6" class="gal btn btn-default" type="button" style="margin-right:30px;">Marquesinas Teatrales</button>
				<div>
                    <br>
                </div>
                <button id="btn_gal_7" class="gal btn btn-default" type="button" style="margin-right:30px;">Merchandising</button>
            </div>
            <br>
            <br>
            <div id="gal_1">
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/arquitectura/1.png" target="_self" class="inline-block litebox" data-litebox-group="gal-1" data-litebox-text="">
								<img src="img/galeria/arquitectura/1.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/arquitectura/2.png" target="_self" class="inline-block litebox" data-litebox-group="gal-1" data-litebox-text="">
								<img src="img/galeria/arquitectura/2.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/arquitectura/3.png" target="_self" class="inline-block litebox" data-litebox-group="gal-1" data-litebox-text="">
								<img src="img/galeria/arquitectura/3.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
            </div>
            <div id="gal_2">
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/1.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/1.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/2.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/2.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/3.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/3.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/4.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/4.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/5.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/5.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/6.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/6.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/7.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/7.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/8.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/8.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/9.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/9.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/10.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/10.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/11.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/11.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/12.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/12.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/13.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/13.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/14.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/14.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/15.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/15.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/16.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/16.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/17.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/17.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/18.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/18.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/19.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/19.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/20.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/20.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/21.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/21.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/22.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/22.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/23.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/23.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/24.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/24.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/25.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/25.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/26.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/26.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/27.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/27.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/28.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/28.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/29.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/29.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/editorial/30.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/editorial/30.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
            </div>
            <div id="gal_3">
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/1.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/1.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/2.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/2.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/3.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/3.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/4.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/4.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/5.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/5.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/6.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/6.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/7.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/7.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/8.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/8.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/9.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/9.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/10.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/10.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/11.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/11.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/12.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/12.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/13.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/13.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/14.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/14.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/15.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/15.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/16.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/16.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/17.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/17.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/18.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/18.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/19.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/19.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/grabato/20.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-3" data-litebox-text="">
								<img src="img/galeria/grabato/20.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
            </div>
            <div id="gal_4">
				<div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/1.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/1.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/2.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/2.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/3.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/3.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/4.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/4.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/5.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/5.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/6.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/6.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/7.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/7.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/8.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/8.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/9.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/9.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/10.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/10.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/11.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/11.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/12.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/12.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/13.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/13.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/14.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/14.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/15.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/15.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/16.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/16.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/17.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/17.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/18.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/18.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/19.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/19.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/20.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/20.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/21.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/21.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/22.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/22.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/23.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/23.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/24.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/24.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/25.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/25.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/26.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/26.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/27.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/27.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/28.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/28.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/29.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/29.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/30.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/30.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/31.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/31.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/32.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/32.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/33.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/33.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/34.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/34.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/35.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/35.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/36.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/36.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/37.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/37.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/38.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/38.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/39.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/39.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/40.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/40.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/41.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/41.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/42.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/42.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/43.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/43.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/44.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/44.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/45.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/45.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/46.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/46.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/47.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/47.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/48.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/48.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/49.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/49.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/50.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/50.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/51.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/51.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/52.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/52.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/53.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/53.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/54.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/54.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/render_3D/55.png" target="_self" class="inline-block litebox" data-litebox-group="gal-4" data-litebox-text="">
								<img src="img/galeria/render_3D/55.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
            </div>
            <div id="gal_5">
            	<div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/manual_corporativo/1.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-5" data-litebox-text="">
								<img src="img/galeria/manual_corporativo/1.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/manual_corporativo/2.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-5" data-litebox-text="">
								<img src="img/galeria/manual_corporativo/2.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/manual_corporativo/3.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-5" data-litebox-text="">
								<img src="img/galeria/manual_corporativo/3.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/manual_corporativo/4.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-5" data-litebox-text="">
								<img src="img/galeria/manual_corporativo/4.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/manual_corporativo/5.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-5" data-litebox-text="">
								<img src="img/galeria/manual_corporativo/5.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/manual_corporativo/6.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-5" data-litebox-text="">
								<img src="img/galeria/manual_corporativo/6.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/manual_corporativo/7.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-5" data-litebox-text="">
								<img src="img/galeria/manual_corporativo/7.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/manual_corporativo/8.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-5" data-litebox-text="">
								<img src="img/galeria/manual_corporativo/8.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/manual_corporativo/9.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-5" data-litebox-text="">
								<img src="img/galeria/manual_corporativo/9.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/manual_corporativo/10.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-5" data-litebox-text="">
								<img src="img/galeria/manual_corporativo/10.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/manual_corporativo/11.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-5" data-litebox-text="">
								<img src="img/galeria/manual_corporativo/11.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/manual_corporativo/12.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-5" data-litebox-text="">
								<img src="img/galeria/manual_corporativo/12.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/manual_corporativo/13.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-5" data-litebox-text="">
								<img src="img/galeria/manual_corporativo/13.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
            </div>
            <div id="gal_6">
            	<div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/marquesinas_teatrales/1.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-6" data-litebox-text="">
								<img src="img/galeria/marquesinas_teatrales/1.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/marquesinas_teatrales/2.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-6" data-litebox-text="">
								<img src="img/galeria/marquesinas_teatrales/2.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/marquesinas_teatrales/3.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-6" data-litebox-text="">
								<img src="img/galeria/marquesinas_teatrales/3.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/marquesinas_teatrales/4.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-6" data-litebox-text="">
								<img src="img/galeria/marquesinas_teatrales/4.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/marquesinas_teatrales/5.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-6" data-litebox-text="">
								<img src="img/galeria/marquesinas_teatrales/5.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
            </div>
            <div id="gal_7">
				<div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/merchandising/1.png" target="_self" class="inline-block litebox" data-litebox-group="gal-7" data-litebox-text="">
								<img src="img/galeria/merchandising/1.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/merchandising/2.png" target="_self" class="inline-block litebox" data-litebox-group="gal-7" data-litebox-text="">
								<img src="img/galeria/merchandising/2.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/merchandising/3.png" target="_self" class="inline-block litebox" data-litebox-group="gal-7" data-litebox-text="">
								<img src="img/galeria/merchandising/3.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/merchandising/4.png" target="_self" class="inline-block litebox" data-litebox-group="gal-7" data-litebox-text="">
								<img src="img/galeria/merchandising/4.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/merchandising/5.png" target="_self" class="inline-block litebox" data-litebox-group="gal-7" data-litebox-text="">
								<img src="img/galeria/merchandising/5.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/merchandising/6.png" target="_self" class="inline-block litebox" data-litebox-group="gal-7" data-litebox-text="">
								<img src="img/galeria/merchandising/6.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/merchandising/7.png" target="_self" class="inline-block litebox" data-litebox-group="gal-7" data-litebox-text="">
								<img src="img/galeria/merchandising/7.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/merchandising/8.png" target="_self" class="inline-block litebox" data-litebox-group="gal-7" data-litebox-text="">
								<img src="img/galeria/merchandising/8.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/merchandising/9.png" target="_self" class="inline-block litebox" data-litebox-group="gal-7" data-litebox-text="">
								<img src="img/galeria/merchandising/9.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/merchandising/10.png" target="_self" class="inline-block litebox" data-litebox-group="gal-7" data-litebox-text="">
								<img src="img/galeria/merchandising/10.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/merchandising/11.png" target="_self" class="inline-block litebox" data-litebox-group="gal-7" data-litebox-text="">
								<img src="img/galeria/merchandising/11.png" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div style="margin:auto; background-color:#000; width:70%; height:1px;"></div>
            <br>
            <br>
		</section>
        <section id="Videos">
            <br>
            <br>
            <h2 style="text-align:center;">Galería de Videos</h2>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">
                	<figure style="position:relative; padding:25px 15px;">
                		<iframe class="youtube-iframe" style="width:100%;" src="https://www.youtube.com/embed/z9NrGYIEyD8" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">
                	<figure style="position:relative; padding:25px 15px;">
						<iframe class="youtube-iframe" style="width:100%;" src="https://www.youtube.com/embed/fRe2YTrS0_g" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">
					<figure style="position:relative; padding:25px 15px;">
                		<iframe class="youtube-iframe" style="width:100%;" src="https://www.youtube.com/embed/zPKcDuwDAto" frameborder="0" allowfullscreen="allowfullscreen"></iframe>	
                	</figure>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">
					<figure style="position:relative; padding:25px 15px;">
                		<iframe class="youtube-iframe" style="width:100%;" src="https://www.youtube.com/embed/qtHdT9BC34o" frameborder="0" allowfullscreen="allowfullscreen"></iframe>		
                	</figure>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">
					<figure style="position:relative; padding:25px 15px;">
                		<iframe class="youtube-iframe" style="width:100%; " src="https://www.youtube.com/embed/-Q333JUnmVk" frameborder="0" allowfullscreen="allowfullscreen"></iframe>	
                	</figure>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">
					<figure style="position:relative; padding:25px 15px;">
                		<iframe class="youtube-iframe" style="width:100%;" src="https://www.youtube.com/embed/PEUx73fp5dM" frameborder="0" allowfullscreen="allowfullscreen"></iframe>	
                	</figure>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">
					<figure style="position:relative; padding:25px 15px;">
                		<iframe class="youtube-iframe" style="width:100%;" src="https://www.youtube.com/embed/LvM2EyMsaoQ" frameborder="0" allowfullscreen="allowfullscreen"></iframe>		
                	</figure>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">
					<figure style="position:relative; padding:25px 15px;">
                		<iframe class="youtube-iframe" style="width:100%;" src="https://www.youtube.com/embed/UphY8r4qaWQ" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                	</figure>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">
					<figure style="position:relative; padding:25px 15px;">
                		<iframe class="youtube-iframe" style="width:100%;" src="https://www.youtube.com/embed/PS_rn1dThAQ" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                	</figure>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </section>
    </div>
    <footer style="margin:0px;background-color: #000;">
        <div class="container">
        	<br>
        	<br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="color:#FFF; text-align:center;">
                3dmdesignstudios | Copyright © 2016 | Todos los derechos reservados.<br>
                Diseñado por <span><a href="http://ramiroportasdesign.tk/" target="_blank">ramiroportasdesign.tk</a></span><br><br>
                </div>
            </div>
            <br>
            <br>
        </div>
    </footer>
    <script>
    	$(window).load(function(){
			$('.load').fadeOut(500);
		});
        $('.carousel').carousel({
            interval: 5000
        })
		$('.litebox').liteBox();
	</script>
</body>
</html>
