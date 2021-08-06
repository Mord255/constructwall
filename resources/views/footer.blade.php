
@section('footer')

	<!--Important link source from https://bootsnipp.com/snippets/ooa9M-->
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<footer id="dk-footer" class="dk-footer" style="background-color: white">
			<div class="container" id="contacto" >
				<div class="row">
					{{-- <div class="col-md-12 col-lg-4">
						<div class="dk-footer-box-info">
							<center>
							<a href="#" class="footer-logo">
								<img src="https://cdn.pixabay.com/photo/2016/11/07/13/04/yoga-1805784_960_720.png" alt="footer_logo" class="img-fluid">
								<img src="{{ asset('landing/image/logo.png') }}" width="70%" class="img-fluid">
							</a>
							</center>
							
							<br>
							<div class="footer-social-link">
								<h3>Nuestras Redes</h3>
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li>
										
									</li>
									<li>
										<a href="#">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-whatsapp" style="background-color:green;"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						
					</div> --}}


					<div class="col-md-12 col-lg-12">
						{{-- <div class="row">
							<div class="col-md-6">
								<div class="contact-us">
									<div class="contact-icon">
										<i class="fa fa-map-o" aria-hidden="true"></i>
									</div>
									<div class="contact-info">
										<h3>Jaipur India</h3>
										<p>5353 Road Avenue</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="contact-us contact-us-last">
									<div class="contact-icon">
										<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
									</div>
									<div class="contact-info">
										<h3>95 711 9 5353</h3>
										<p>Give us a call</p>
									</div>
								</div>
							</div>
						</div> --}}
						
						<div class="row">
							<div class="col-md-7 col-lg-7">
								<div class="footer-widget">
									<a href="#" class="footer-logo">
										<img src="{{ asset('landing/image/logo1.jpg') }}" width="80%" class="img-fluid">
									</a>
								</div>
							</div>
							<div class="col-md-5 col-lg-5 ">
								<div class="footer-widget footer-left-widget text-align-center ">
										<div class="section-heading">
											<h1 style="color:black;">Contactenos</h1>
											<span class="animate-border border-black"></span>
										</div>
										<ul>
											<li>
												<a style="text-decoration: none" class="row" href="#" target="_blank">
													<i style="color:red;font-size: 35px;" class="fas fa-map-marker-alt col-md-2"></i><h5 class="col-md-10 "> Direccion</h5> 
												</a>
											</li>
											{{-- <li>
												<a style="text-decoration: none" class="row" href="#" target="_blank">
													<i style="color:black;" class="fas fa-phone fa-2x col-md-2"></i><h5 class="col-md-10 "> Numeros</h5> 
												</a>
											</li> --}}
											<li>
												<a style="text-decoration: none" class="row" href="#" target="_blank">
													<i style="color:blue;font-size: 35px;" class="fab fa-facebook col-md-2"></i><h5 class="col-md-10 "> ConstructWall</h5> 
												</a>
											</li>
										</ul>
										<ul>
											<li>
												<a style="text-decoration: none" class="row" href="#" target="_blank">
													<i style="color:green;font-size: 40px;" class="fab fa-whatsapp col-md-2"></i><h5 class="col-md-10 "> 972364645</h5> 
												</a>
											</li>
											<li>
												<a style="text-decoration: none" class="row" href="jean2000.jfps@gmail.com" target="_blank">
													<i style="color:#CC1414;font-size: 35px;" class="fa fa-envelope  col-md-2"></i><h5 class="col-md-10 "> info@constructwall.com</h5> 
												</a>
											</li>
										</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- copyright -->
			<div style="background-color: #015a68" class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-align-center">
							<div class="copyright-menu">
								<div class="copyright-menu text-white">
									<span class="text-white">Copyright © 2021, All Right Reserved</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="copyright-menu">
								<ul>
									<li>
										<a class="text-white" href="#">Volver al Inicio</a>
									</li>
								</ul>
							</div>
						</div>
						{{-- <div class="col-md-12">
							<div class="copyright-menu">
								<span>Copyright © 2021, All Right Reserved</span>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
	</footer>
@endsection