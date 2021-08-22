@extends('header')
@section('titulo','ConstructWall')
@section('contenido')

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">
	<div class="site-wrapper overflow-hidden position-relative" >
		<!-- Site Header -->
		<!-- Preloader -->
		<!-- <div id="loading">
		<div class="preloader">
		<img src="./image/preloader.gif" alt="preloader">
		</div>
		</div>    -->
		<!--Site Header Area -->
		{{-- style="background-color: #202020" --}}
		<header style="background-color: white" class="site-header site-header--menu-right landing-14-menu site-header--absolute site-header--sticky">
			<div class="container" >
			<nav class="navbar site-navbar "  >
				<!-- Brand Logo-->
				<div class="brand-logo m-2">
				<a >
					<!-- light version logo (logo must be black)-->
					<img src="{{ asset('landing/image/logo2.jpg') }}" width="15%" height="15%" alt="" class="light-version-logo">
					<!-- Dark version logo (logo must be White)-->
					{{-- <img src="{{ asset('landing/image/logo2.jpg') }}" width="15%" height="15%" alt="" class="dark-version-logo"> --}}
				</a>
				</div>
				<div class="menu-block-wrapper">
				<div class="menu-overlay"></div>
				<nav class="menu-block" id="append-menu-header">
					<div class="mobile-menu-head">
					<div class="go-back">
						<i class="fa fa-angle-left"></i>
					</div>
					<div class="current-menu-title"></div>
					<div class="mobile-menu-close">&times;</div>
					</div>
					<ul class="site-menu-main">
					{{-- <li class="nav-item nav-item-has-children">
						<a href="#" class="nav-link-item drop-trigger">Dropdowns <i class="fas fa-angle-down"></i>
						</a>
						<ul class="sub-menu" id="submenu-9">
						<li class="sub-menu--item">
							<a href="#">Dropdown 01</a>
						</li>
						<li class="sub-menu--item">
							<a href="#">Dropdown 02</a>
						</li>
						<li class="sub-menu--item">
							<a href="#">Dropdown 03</a>
						</li>
						<li class="sub-menu--item">
							<a href="#">Dropdown 04</a>
						</li>
						</ul>
					</li> --}}
					<li class="nav-item">
						<a href="#home" style="font-size: 120%;" class="nav-link-item "><b>Inicio</b></a>
					</li>
					<li class="nav-item">
						<a href="#servicios" style="font-size: 120%;" class="nav-link-item "><b>Servicios</b></a>
					</li>
					<li class="nav-item">
						<a href="#nosotros" style="font-size: 120%;" class="nav-link-item "><b>Nosotros</b></a>
					</li>
					<li class="nav-item">
						<a href="#contacto" style="font-size: 120%;" class="nav-link-item "><b>Contactanos</b></a>
					</li>
					</ul>
				</nav>
				</div>
				{{-- <div class="header-btn header-btn-l-14 ms-auto d-none d-xs-inline-flex">
				<a target="_blank" class="btn btn trail-btn focus-reset" href="https://finestdevs.com/shade/">
					Start free trail
				</a>
				</div> --}}
				<!-- mobile menu trigger -->
				<div class="mobile-menu-trigger text-white">
				<span></span>
				</div>
				<!--/.Mobile Menu Hamburger Ends-->
			</nav>
			</div>
		</header>
		<!-- navbar- -->
		<!-- Hero Area -->
		<div class="hero-area-l-14 position-relative z-index-1 overflow-hidden " style="" id="home">
			<div class="container">
			<div class="row position-relative justify-content-center">
				<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 pr-0 " data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
				<div class="content">
					<h1 class="text-white"><b>CONSTRUCTWALL</b></h1>
					<p class="text-white">Somos CONSTRUCTWALL, empresa dedicada a la prestación de servicios en drywall, instalaciones eléctricas y sanitarias, construcciones en material noble y diseño de Interiores. Contamos con un equipo calificado que está conformado por profesionales y personal calificado con experiencia.</p>
					{{-- <a href="#" class="btn focus-reset">Start my free trial</a> --}}
				</div>
				</div>
				<div class="col-xl-7 col-lg-5 col-md-8 " data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
				<div class="banner-image-l-14">
					{{-- <img src="{{ asset('landing/image/l4/hero-img.png') }}" alt="" class="w-100 mt-xl-n10"> --}}
					<img src="{{ asset('landing/image/home.png') }}" alt="" class="w-100 mt-xl-n10">
				</div>
				</div>
			</div>
			</div>
			<div class="bg-shape-14"></div>
		</div>
		<!-- Brand-area -->
		{{-- <div class="brand-area-l-14">
			<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
				<h4>The #1 Landing Page Platform for 15,000+ Brands</h4>
				</div>
			</div>
			<div class="row img-grayscale">
				<div class="col-lg-12">
				<div class="brand-area-l-14-items d-flex justify-content-center justify-content-xl-between align-items-center flex-wrap ">
					<div class="single-brand " data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
					<img src="{{ asset('landing/image/l4/brand-logo.svg') }}" alt="">
					</div>
					<div class="single-brand " data-aos="fade-right" data-aos-duration="700" data-aos-once="true">
					<img src="{{ asset('landing/image/l4/brand-logo-1.svg') }}" alt="">
					</div>
					<div class="single-brand " data-aos="fade-right" data-aos-duration="900" data-aos-once="true">
					<img src="{{ asset('landing/image/l4/brand-logo-2.svg') }}" alt="">
					</div>
					<div class="single-brand " data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
					<img src="{{ asset('landing/image/l4/brand-logo-3.svg') }}" alt="">
					</div>
					<div class="single-brand " data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
					<img src="{{ asset('landing/image/l4/brand-logo-4.svg') }}" alt="">
					</div>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
				<div class="brand-aarea-border-l14"></div>
				</div>
			</div>
			</div>
		</div> --}}
		{{-- <div class="container" id="servicios">
			<div class="row">
				<div class="col-lg-12">
				<div class="brand-aarea-border-l14"></div>
				</div>
			</div>
		</div> --}}

		<div class="container" id="servicios"></div>
		<!-- Content-Area-1 -->
		<div class="content-area-l-14-1 position-relative fondoplano">
			<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-4 col-lg-6 col-md-8 col-sm-10 order-lg-1 order-1" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="h-100 section-heading-8 content text-lg-start text-center">
					<h2 >Construcciones con Drywall</h2>
					<p >Realizamos contrucciones con Drywall de la mas alta calidad con expertos calificados para llevar a cabo lo que desee</p>
					<a href="#contacto" class="btn focus-reset">Mas Información<i class="fas fa-angle-right"></i>
					</a>
				</div>
				</div>
				<div class="offset-xl-2 col-xl-6 col-lg-6 col-md-8 pl-xl-11 order-lg-1 order-0" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
				<div class="content-img">
					<img src="{{ asset('landing/image/2.png') }}" alt="" class="w-100 w-xl-auto">
				</div>
				</div>
			</div>
			</div>
		</div>

		<!-- Content-Area-2 -->
		<div class="content-area-l-14-2 position-relative fondoplano">
			<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
				<div class="content-img pr-lg-13">
					<img src="{{ asset('landing/image/3.png') }}" alt="" class="w-100">
				</div>
				</div>
				<div class="col-xl-4 offset-xl-2 col-lg-6 col-md-8 col-sm-10" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
				<div class="content section-heading-8 text-lg-start text-center">
					<h2>Construcciones en Material Noble</h2>
					<p>Realizamos todo tipo de construcciones de material noble con expertos caslificados para construccion el hogar de sus sueños</p>
					<a href="#contacto" class="btn focus-reset">Mas Información<i class="fas fa-angle-right"></i>
					</a>
				</div>
				</div>
			</div>
			</div>
		</div>
		
		<!-- Content-Area-2 -->
		<div class="content-area-l-14-1 position-relative fondoplano">
			<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-4 col-lg-6 col-md-8 col-sm-10 order-lg-1 order-1" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
				<div class="h-100 section-heading-8 content text-lg-start text-center">
					<h2>Instalaciones Electricas y Sanitarias</h2>
					<p>Realizamos instalaciones electricas con materiales de alta calidad y de complejo funcionamiento, a su vez realizamos instalaciones sanitarias para todo tipo de construccion</p>
					<a href="#contacto" class="btn focus-reset">Mas Información<i class="fas fa-angle-right"></i>
					</a>
				</div>
				</div>
				<div class="offset-xl-2 col-xl-6 col-lg-6 col-md-8 pl-xl-11 order-lg-1 order-0" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
				<div class="content-img">
					<img src="{{ asset('landing/image/5.png') }}" alt="" class="w-100 w-xl-auto">
				</div>
				</div>
			</div>
			</div>
		</div>

		<!-- Content-Area-2 -->
		<div class="content-area-l-14-2 position-relative fondoplano">
			<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
				<div class="content-img pr-lg-13">
					<img src="{{ asset('landing/image/1.png') }}" alt="" class="w-100">
				</div>
				</div>
				<div class="col-xl-4 offset-xl-2 col-lg-6 col-md-8 col-sm-10" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
				<div class="content section-heading-8 text-lg-start text-center">
					<h2>Diseño de Interiores</h2>
					<p>Realizamos todo tipo de Diseño de interiores llevando a cabo el acabado de sus sueños con expertos calificados y materiales de alta calidad</p>
					<a href="#contacto" class="btn focus-reset">Mas Información<i class="fas fa-angle-right"></i>
					</a>
				</div>
				</div>
			</div>
			</div>
		</div>
		
		
		<!-- Feature Area -->
		{{-- <div class="features-area-l-14" id="nosotros">
			<div class="container bg-shape-img-2 position-relative">
				<div class="row features-area-l-14 justify-content-center mx-0">
					<div class="col-lg-6 col-md-8 col-sm-10 px-lg-6" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
						<div class="content-area  d-flex">
							<div class="circle-85 hover-icon">
							<img src="{{ asset('landing/image/l4/f-icon-1.png') }}" alt="">
							</div>
							<div class="content-body pl-sm-14 pl-5">
								<h5>Mision</h5>
								<p class="mb-0">
									Trabajar constantemente junto con nuestros colaboradores para ofrecer servicios en infraestructura de calidad, confiables, rápidos y con facilidad de adaptación a cada una de las necesidades de nuestros clientes.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-8 col-sm-10" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
						<div class="content-area  d-flex ">
							<div class="circle-85 hover-icon">
							<img src="{{ asset('landing/image/l4/f-icon-2.png') }}" alt="">
							</div> 
							<div class="content-body">
								<h5>Vision</h5>
								<p class="mb-0">
									Ser una empresa reconocida a nivel Lima Metropolitana por ofrecer servicios en infraestructura con materiales de calidad, ofreciéndoles la mejor respuesta a sus necesidades.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-8 col-sm-10" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
						<div class="content-area  d-flex ">
							
							<div class="circle-85 hover-icon">
							<img src="{{ asset('landing/image/l4/f-icon-3.png') }}" alt="">
							</div>
							<div class="content-body">
							<h5>
								Easy to Use</h5>
							<p class="mb-0">
								Event is not like most tech conferences.
								We want our presentations to engage the audience.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-8 col-sm-10" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
						<div class="content-area  d-flex ">
							<div class="circle-85  hover-icon">
							<img src="{{ asset('landing/image/l4/f-icon-4.png') }}" alt="" />
							</div>
							<div class="content-body">
							<h5>
								Easy to Use</h5>
							<p class="mb-0">
								Event is not like most tech conferences.
								We want our presentations to engage the audience, spark discussion and inspire new ideas.
							</p>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div> --}}
		
		{{-- <div class="p-2" style="background-color: #00b1a8">
			<p style="text-color: #00b1a8">.</p>
		</div> --}}
		<!-- Pricing-area section -->
		{{-- <div class="pricing-area-l14 position-relative overflow-hidden z-index-1">
			<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-xl-6 col-lg-7 col-md-10 text-center" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
				<div class="section-heading-8">
					<h2>
					Simple pricing</h2>
					<p>Create custom landing
					pages with Shades that convert more visitors than any website—no coding required.</p>
				</div>
				</div>
			</div>
			<div class="row justify-content-center" id="table-price-value" data-pricing-dynamic data-value-active="monthly">
				<div class="col-md-12 text-center">
				<!-- toggle-btn start -->
				<div class="toggle-btn d-inline-block  justify-content-center">
					<a class="btn-toggle btn-toggle-2 active-white d-flex  price-deck-trigger" data-pricing-trigger data-target="#table-price-value" href="javascript:">
					<span class="round"></span>
					</a>
				</div>
				<!-- toggle-btn end -->
				</div>
				<div class="col-md-12 col-sm-8 l-14-pricing-table row no-gutters">
				<div class="col-lg-3 col-md-6 border p-0">
					<!-- single-price start -->
					<div class="single-price bg-default text-center  pt-5 pb-10 mb-lg-0" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
					<!-- price-top start -->
					<div class="price-top justify-content-between mb-2">
						<span>Basic</span>
					</div>
					<!-- price-top end -->
					<!-- main-price start -->
					<div class="main-price pb-8 border-bottom">
						<div class="price mt-3 mb-3 position-relative">
						<span class="d-inline-block mb-0  dynamic-value">$</span>
						<h2 class="d-inline-block mb-0  dynamic-value" data-active="15" data-monthly="19" data-yearly="199"></h2>
						</div>
						<span class=" dynamic-value" data-active="per month" data-monthly="Per month"
									data-yearly="per year"></span>
					</div>
					<!-- main-price end -->
					<!-- price-body start -->
					<div class="price-body">
						<ul class="pricing-list with-check-icon list-unstyled">
						<li>
							Unlimited Blocks</li>
						<li>
							5GB Clould Storages</li>
						<li>
							Custom Domain Names</li>
						<li>
							<del class="text-gray">Unlimited Emails</del>
						</li>
						</ul>
					</div>
					<div class="price-btn">
						<a class="btn focus-reset" href="#">Get started now</a>
					</div>
					<!-- price-btn end -->
					</div>
					<!-- single-price end -->
				</div>
				<div class="col-lg-3 col-md-6 border p-0">
					<!-- single-price start -->
					<div class="single-price bg-default popular-pricing popular-pricing-2 text-center position-relative  pt-5 pb-10 mb-lg-0" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
					<!-- price-top start -->
					<div class="price-top justify-content-between mb-2">
						<span>Pro</span>
					</div>
					<!-- price-top end -->
					<!-- main-price start -->
					<div class="main-price pb-8 border-bottom">
						<div class="price mt-3 mb-3 position-relative">
						<span class="d-inline-block mb-0  dynamic-value">$</span>
						<h2 class="d-inline-block mb-0  dynamic-value" data-active="15" data-monthly="29" data-yearly="299"></h2>
						</div>
						<span class=" dynamic-value" data-active="per month" data-monthly="per month"
									data-yearly="per year"></span>
					</div>
					<!-- main-price end -->
					<!-- price-body start -->
					<div class=" price-body">
						<ul class="pricing-list with-check-icon list-unstyled">
						<li>
							Unlimited Blocks</li>
						<li>
							5GB Clould Storages</li>
						<li>
							Custom Domain Names</li>
						<li>
							Unlimited Emails</li>
						</ul>
					</div>
					<div class="price-btn price-btn-bro">
						<a class="btn" href="#">Get started now</a>
					</div>
					<!-- price-btn end -->
					</div>
					<!-- single-price end -->
				</div>
				<div class="col-lg-3 col-md-6 border p-0">
					<!-- single-price start -->
					<div class="single-price bg-default text-center  pt-5 pb-10 mb-lg-0" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
					<!-- price-top start -->
					<div class="price-top justify-content-between mb-2">
						<span>Smart</span>
					</div>
					<!-- price-top end -->
					<!-- main-price start -->
					<div class="main-price pb-8 border-bottom">
						<div class="price mt-3 mb-3 position-relative">
						<span class="d-inline-block mb-0  dynamic-value">$</span>
						<h2 class="d-inline-block mb-0  dynamic-value" data-active="15" data-monthly="49" data-yearly="499"></h2>
						</div>
						<span class=" dynamic-value" data-active="per month" data-monthly="per month"
									data-yearly="per year"></span>
					</div>
					<!-- main-price end -->
					<!-- price-body start -->
					<div class=" price-body">
						<ul class="pricing-list with-check-icon list-unstyled">
						<li>
							Unlimited Blocks</li>
						<li>
							5GB Clould Storages</li>
						<li>
							Custom Domain Names</li>
						<li>
							Unlimited Emails</li>
						</ul>
					</div>
					<div class="price-btn">
						<a class="btn" href="#">Get started now</a>
					</div>
					<!-- price-btn end -->
					</div>
					<!-- single-price end -->
				</div>
				<div class="col-lg-3 col-md-6 border p-0">
					<!-- single-price start -->
					<div class="single-price bg-default  text-center  pt-5 pb-10" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
					<!-- price-top start -->
					<div class="price-top justify-content-between mb-2">
						<span
									class="font-size-1 letter-spacing-np51 text-dovegray line-height-1p66 font-weight-bold">Exclusive</span>
					</div>
					<!-- price-top end -->
					<!-- main-price start -->
					<div class="main-price pb-8 border-bottom">
						<div class="price mt-3 mb-3 position-relative">
						<span class="d-inline-block mb-0  dynamic-value">$</span>
						<h2 class="d-inline-block mb-0  dynamic-value" data-active="15" data-monthly="89" data-yearly="999"></h2>
						</div>
						<span class=" dynamic-value" data-active="per month" data-monthly="per month"
									data-yearly="per year"></span>
					</div>
					<!-- main-price end -->
					<!-- price-body start -->
					<div class="price-body">
						<ul class="pricing-list with-check-icon list-unstyled">
						<li>
							Unlimited Blocks</li>
						<li>
							5GB Clould Storages</li>
						<li>
							Custom Domain Names</li>
						<li>
							Unlimited Emails</li>
						</ul>
					</div>
					<div class="price-btn">
						<a class="btn" href="#">Get started now</a>
					</div>
					<!-- price-btn end -->
					</div>
					<!-- single-price end -->
				</div>
				</div>
			</div>
			</div>
		</div> --}}
		<!-- CTA Area -->
		{{-- <div class="cta-area-l-14">
			<div class="container position-relative">
			<div class="bg-shape-img-3"></div>
			<div class="row cta-area-l-14-content justify-content-center text-lg-start text-center">
				<div class="col-6 text-center">
					<div class="cta-content">
						<h3>Mision</h3>
						<p>Trabajar constantemente junto con nuestros colaboradores para ofrecer servicios en infraestructura de calidad, confiables, rápidos y con facilidad de adaptación a cada una de las necesidades de nuestros clientes.</p>
					</div>
				</div>
				<div class="col-6 text-center">
					<div class="cta-content">
						<h3>Vision</h3>
						<p>Ser una empresa reconocida a nivel Lima Metropolitana por ofrecer servicios en infraestructura con materiales de calidad, ofreciéndoles la mejor respuesta a sus necesidades.</p>
					</div>
				</div>
			</div>
			</div>
		</div> --}}
		<div id=""></div>
		
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
						<img class="card-image" src="{{ asset('landing/image/mision.png') }}" >
						<div class="card-body">
							<h4 class="card-title">Misión</h4>
							<p>Trabajar constantemente junto con nuestros colaboradores para ofrecer servicios en infraestructura de calidad, confiables, rápidos y con facilidad de adaptación a cada una de las necesidades de nuestros clientes.</p>
						</div>
					</div>
					<div class="card col-lg-5 col-md-12 m-2">
						<img class="card-image" src="{{ asset('landing/image/vision.png') }}" >
						<div class="card-body">
							<h4 class="card-title">Visión</h4>
							<p>Ser una empresa reconocida a nivel Lima Metropolitana por ofrecer servicios en infraestructura con materiales de calidad, ofreciéndoles la mejor respuesta a sus necesidades.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contactofondo">
			<div id="contacto" class="container " >
				<div class=" m-5 justify-content-center wrapper">
					<div class="row text-center justify-content-center">
						<div class="col-lg-12 mt-5 ml-5 mr-5">
							<h2 class="text-center">Informacion de Contacto</h2>
							<p class="p-heading p-large">No dude en llamarnos o enviarnos un mensaje.</p>
						</div> 
					</div>
					<br>
					<div class="row no-gutters ">
						<div class="col-lg-6 col-md-12 m-2 ">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.4965597886745!2d-76.96999117084103!3d-12.044467587884942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c714a1c664e3%3A0x3ea4ce3436b61176!2sTienda%20accesorios%20para%20celulares!5e0!3m2!1ses-419!2spe!4v1628913869078!5m2!1ses-419!2spe" 
							width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="iframe mr-2"></iframe>
						</div>
						<div class=" col-lg-4 col-md-12 m-2">
							<div class=" d-flex align-items-stretch">
								<div class="info-wrap w-100 p-lg-5 p-4 img">
									<h3>Contactanos</h3>
									<br>
									{{-- <p class="mb-4">We're open for any suggestion or just to have a chat</p> --}}
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
				</div>
			</div>
		</div>
	</div>
	
	<link rel="stylesheet" href="{{ asset('contacto/css/style.css') }}">
	<script src="{{ asset('landing/js/vendor.min.js') }}"></script>
	<script src="{{ asset('landing/plugins/aos/aos.min.js') }}"></script>
	<script src="{{ asset('landing/plugins/menu/menu.js') }}"></script>
	<script src="{{ asset('landing/js/custom.js') }}"></script>
	
</body>

@endsection

@extends('footer')

