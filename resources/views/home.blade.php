
@section('titulo','ConstructWall')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>ConstructWall Perú</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="pagina/css/bootstrap.css" rel="stylesheet">
    <link href="pagina/css/fontawesome-all.css" rel="stylesheet">
    <link href="pagina/css/swiper.css" rel="stylesheet">
	<link href="pagina/css/magnific-popup.css" rel="stylesheet">
	<link href="pagina/css/styles.css" rel="stylesheet">
    <link href="pagina/css/style.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="pagina/images/logo2.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav  class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="#header"><img src="pagina/images/logo2.png" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header" style="font-size: 120%;"><b>Inicio</b> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services" style="font-size: 120%;"><b> Servicios</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#nosotros" style="font-size: 120%;"><b>Nosotros</b></a>
                </li>

                <!-- Dropdown Menu -->          
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Acerca de</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Terms Conditions</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Privacy Policy</span></a>
                    </div>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact" style="font-size: 120%;"><b>Contactanos</b></a>
                </li>
            </ul>
            {{-- <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span> --}}
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1 ><span class="turquoise"><b style="color: white">CONSTRUCTWALL</b></span></h1>
                            <p class="p-large text-white">Somos CONSTRUCTWALL, empresa dedicada a la prestación de servicios en drywall, instalaciones eléctricas y sanitarias, construcciones en material noble y diseño de Interiores. Contamos con un equipo calificado que está conformado por profesionales y personal con amplia experiencia.</p>
                            <a class="btn-solid-lg page-scroll" href="#services">Descubrir</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="pagina/images/home.png" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->
    
    <!-- Details 2 -->
    <div class="basic-2" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img style="border-radius: 15px;" class="img-fluid" src="pagina/images/service.jpeg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Servicios Generales</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Servicios de Electricidad.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Servicios de Pintura General</div>
                            </li>
                            {{-- <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Todos estarán encantados, desde las partes interesadas hasta los empleados.</div>
                            </li> --}}
                        </ul>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">Descubrir mas</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> 

    

    <!-- Details Lightbox 2 -->
	<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-7">
                    <div class="image-container">
                        <img style="border-radius: 15px;" class="img-fluid" src="pagina/images/obra.jpeg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <h3>Mas Servicios</h3>
                    <hr>
                    {{-- <p>El módulo de correo electrónico básicamente acelerará sus operaciones de marketing por correo electrónico al tiempo que ofrece un mayor control de los suscriptores.</p> --}}
                    {{-- <p>¿Necesita crear listas para sus campañas de correo electrónico? Ahora es más fácil con HostDog.</p> --}}
                    <h5>Acabados Modernos</h5>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Pisos en Porcelanato líquido según su diseño.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Porcelanato.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Cerámicos.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Piso Flotante.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Azulejos.</div>
                        </li>
                    </ul>
                    <h5>Instalaciones Sanitarias</h5>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Agua, desage.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Instalación, reparación y mantenimiento.</div>
                        </li>
                    </ul>
                </div>
                <a class="btn-solid-reg mfp-close page-scroll" href="#contact">Enviar</a> 
                <a class="btn-outline-reg mfp-close as-button" href="#screenshots">Atrás</a>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>

    <!-- Details Lightbox 3 -->
	<div id="details-lightbox-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-7">
                    <div class="image-container">
                        <img style="border-radius: 15px;" class="img-fluid" src="pagina/images/obra2.jpeg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <h3>Mas Servicios</h3>
                    <hr>
                    <h5>Trabajos en Sistemas Drywall</h5>
                    {{-- <p>El módulo de correo electrónico básicamente acelerará sus operaciones de marketing por correo electrónico al tiempo que ofrece un mayor control de los suscriptores.</p> --}}
                    {{-- <p>¿Necesita crear listas para sus campañas de correo electrónico? Ahora es más fácil con HostDog.</p> --}}
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Casas.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Departamentos.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Ampliaciones.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Divisiones en muros estructurales y muros simples.</div>
                        </li>
                    </ul>
                    <h5>Detalles Decorativos</h5>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Cielo raso baldosas acústicas.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Cenefas.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Hornacinas.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Repisas Flotantes.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Revestimientos.</div>
                        </li>
                    </ul>
                    <h5>Detalles Arquitectónicos</h5>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Muro Curvo.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Falsas Columnas.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Vigas.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Cercos.</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Sobre techos, entrepisos.</div>
                        </li>
                    </ul>
                    
                </div>
                <a class="btn-solid-reg mfp-close page-scroll" href="#contact">Enviar</a> 
                <a class="btn-outline-reg mfp-close as-button" href="#screenshots">Atrás</a>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>

    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Construcciones con Drywall</h2>
                        <p>Realizamos contrucciones con Drywall de la mas alta calidad con expertos calificados para llevar a cabo lo que desee.</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-3">Descubrir mas <i class="fas fa-angle-right"></i></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="pagina/images/2.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>

    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="pagina/images/3.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Construcciones en Material Noble</h2>
					    <p>Realizamos todo tipo de construcciones de material noble con expertos caslificados para construccion el hogar de sus sueños.</p>
                        <a class="btn-solid-reg " href="#contact">Mas Información <i class="fas fa-angle-right"></i></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>

    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Instalaciones Electricas y Sanitarias</h2>
					    <p>Realizamos instalaciones electricas con materiales de alta calidad y de complejo funcionamiento, a su vez realizamos instalaciones sanitarias para todo tipo de construccion.</p>
                        <a class="btn-solid-reg " href="#contact">Mas Información <i class="fas fa-angle-right"></i></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="pagina/images/5.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>

    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="pagina/images/diseno.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Diseño de Interiores</h2>
					    <p>Realizamos todo tipo de Diseño de interiores llevando a cabo el acabado de sus sueños con expertos calificados y materiales de alta calidad.</p>
                        <a class="btn-solid-reg " href="#contact">Mas Información <i class="fas fa-angle-right"></i></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>



    <div id="nosotros" class="container text-center">
        <div class="text-center m-5 justify-content-center">
            <div class="row text-center justify-content-center">
                <div class="col-12 m-5">
                    <h2 class="text-center">Sobre Nosotros</h2>
                    {{-- <p class="p-heading p-large">Servimos a pequeñas y medianas empresas en todas las industrias relacionadas con la tecnología con servicios de crecimiento de alta calidad que se presentan a continuación.</p> --}}
                </div> 
            </div>
            <div class="row text-center justify-content-center">
                <div class="card col-lg-5 col-md-12 m-2">
                    <img class="card-image" src="{{ asset('pagina/images/mision.png') }}" >
                    <div class="card-body">
                        <h4 class="card-title">Misión</h4>
                        <p>Trabajar constantemente junto con nuestros colaboradores para ofrecer servicios en infraestructura de calidad, confiables, rápidos y con facilidad de adaptación a cada una de las necesidades de nuestros clientes.</p>
                    </div>
                </div>
                <div class="card col-lg-5 col-md-12 m-2">
                    <img class="card-image" src="{{ asset('pagina/images/vision.png') }}" >
                    <div class="card-body">
                        <h4 class="card-title">Visión</h4>
                        <p>Ser una empresa reconocida a nivel Lima Metropolitana por ofrecer servicios en infraestructura con materiales de calidad, ofreciéndoles la mejor respuesta a sus necesidades.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact -->
    <div id="contact" class="form-2">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Información del contacto</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">No dude en llamarnos o enviarnos un mensaje </li>
                        {{-- <li><i class="fas fa-map-marker-alt"></i>Calle Lima, 07026 La Molina, Lima, PE</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:51999922993">+51999922993</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:marko1981@gmail.com">marko1981@gmail.com</a></li> --}}
                    </ul>
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.4965597886745!2d-76.96999117084103!3d-12.044467587884942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c714a1c664e3%3A0x3ea4ce3436b61176!2sTienda%20accesorios%20para%20celulares!5e0!3m2!1ses-419!2spe!4v1628913869078!5m2!1ses-419!2spe" 
						width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="iframe mr-2"></iframe>
                    </div>
                </div> 
                <div class="col-lg-6 info-wrap">
                    <h3>Contactanos</h3>
					<br>
									
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-map-marker"></span>
										</div>
										<div class="text pl-3">
											<p><span>Direccion:</span> Av. Los Ruiseñores 954, Santa Anita</p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fab fa-facebook-f"></span>
										</div>
										<div class="text pl-3">
											<p><span>Facebook: </span> <a target="_blank" href="https://www.facebook.com/constructwall">ConstructWall SRL</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fab fa-whatsapp"></span>
										</div>
										<div class="text pl-3">
											<p><span>WhatsApp: </span> <a target="_blank" href="https://wa.me/51989753921">989753921</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-phone"></span>
										</div>
										<div class="text pl-3">
											<p><span>Celular:</span> <a >989753921</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fas fa-paper-plane"></span>
										</div>
										<div class="text pl-3">
											<p><span>Correo:</span> <a href="mailto:constructwall.peru@gmail.com?subject=Informacion ConstructWall&">constructwall.peru@gmail.com</a></p>
										</div>
									</div>
                    
                </div> 
            </div> 
        </div> 
    </div> 

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2021 <a href="#">ConstructWall </a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="pagina/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="pagina/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="pagina/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="pagina/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="pagina/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="pagina/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="pagina/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="pagina/js/scripts.js"></script> <!-- Custom scripts -->
    
</body>
</html>

