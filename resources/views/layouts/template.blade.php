<!DOCTYPE html>
<html lang="es">

<head>
	<title>Centro Universitario De Ciencias Sociales Y Humanidades</title>
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/cards.css') }}">
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
	<link rel="icon" href="{{ asset('images/1-logo_udg.png') }}">
	<link rel="stylesheet" href="{{ asset('css/sidebarsocial.css') }}">
	<link rel="stylesheet" href="{{ asset('fontawesome/css/solid.css') }}">
	<link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>



<body>
	<!--Inicio nav-->
	<nav class="navbar navbar-expand-lg container-fluid" id="ftco-navbar" style="background-color: #F3CDB6;">
		<div class="container-fluid d-flex align-items-center" style="background-color: #F3CDB6;">
			<div class="col-lg-2 mx-auto d-flex align-items-center container-fluid">
				<a class="navbar-brand mx-auto d-flex" href="https://www.udg.mx">

					<img src="images/1-logo_udg.png" style="height: 120px;">
					&nbsp;
					&nbsp;
				</a>

				<a class="navbar-brand mx-auto d-flex" href="http://www.cucsh.udg.mx">
					<img src="images/cucsh.png" alt="" class="" style="height: 110px; padding: right 50px;">
				</a>
			</div>
			<div>
				<a class="navbar-brand mx-auto d-flex" href="">
					<img src="images/globalpolitcs.png" alt="" class="{{route('index')}}" style="height: 120px;">
				</a>
			</div>
			<button class="navbar-toggler border border-dark" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				&#9776;
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mx-auto1 d-flex align-items-center text-center">
					<form action="#" class="searchform order-lg-last text-dark mx-auto d-flex align-items-center pt-3">
						<div class="form-group d-flex text-dark rounded" style="background-color: #004777">
							<input type="text" class="form-control pl-3 text-dark" placeholder="Search">
						</div>
					</form>
					<li class="nav-item "><a href="{{route('index')}}" class="nav-link navBar"><b style="color: 2922B04;">Inicio</b></a></li>
					<li class="nav-item "><a href="{{route('plan_estudios')}}" class="nav-link color-navBar"><b>Plan de
								Estudios/LGAC</b></a></li>
					<li class="nav-item "><a href="{{route('nab')}}" class="nav-link color-navBar"><b>NAB</b></a></li>
					<li class="nav-item "><a href="{{route('requisitos')}}" class="nav-link color-navBar"><b>Requisitos</b></a>
					</li>
					<li class="nav-item "><a href="{{route('estudiantes')}}" class="nav-link color-navBar"><b>Estudiantes</b></a></li>
					</li>
					<li class="nav-item active"><a href="{{route('contacto')}}" class="nav-link color-navBar"><b>Contacto</b></a></li>
					
					<li class="nav-item active dropdown">
						<a class="nav-link color-navBar dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<b>Redes<br>Sociales</b></a>
						
						<ul class="dropdown-menu list-unstyled float-md-left float-lft mt-1 text-center" style="background-color: #F3CDB6;">
						<a href="https://twitter.com/gpandtps">
						<li class="fa fa-twitter redes-sociales-responsive" style="font-size: 50px; background: #1da1f2; /* fallback for old browsers */      
						-webkit-background-clip: text;
						color: transparent;"></li></a>
						<a href="https://www.youtube.com/channel/UCcxHb3nbSkTEmpFBN9126uA">
						<li class="fa fa-youtube fa-xl redes-sociales-responsive 1h-1" style="font-size: 50px; background: #e52d27; /* fallback for old browsers */
						background: -webkit-linear-gradient(to right, #e52d27, #b31217); /* Chrome 10-25, Safari 5.1-6 */
						background: linear-gradient(to right, #e52d27, #b31217); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
						-webkit-background-clip: text;
						color: transparent;"></li></a>
						<a href="https://www.instagram.com/gpandtps/">
						<li  class="fa fa-instagram redes-sociales-responsive" style="font-size: 50px; background: #833ab4; /* fallback for old browsers */
							background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4); /* Chrome 10-25, Safari 5.1-6 */
							background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
							-webkit-background-clip: text;
							color: transparent;"></li></a>
						 <a href="https://www.facebook.com/gpandtps">
						<li class="fa fa-facebook redes-sociales-responsive" style="font-size: 50px; background: #3b5998; /* fallback for old browsers */      
						-webkit-background-clip: text;
						color: transparent;"></li></a>
						
						
						</ul>
					
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Final NavBar-->
<!--
	Inicio Sidebar|Barra lateral
	<div class="redes-sociales-laterales row rounded-right">
		<ul class="list-group ul">
			<li><a href="https://twitter.com/gpandtps" target="_blank" class="li fa fa-twitter redes-sociales-responsive" style="padding-top: 25%; padding-left: 52%; font-size: 45px; background: #1da1f2;  /* fallback for old browsers */						
				-webkit-background-clip: text;
				color: transparent;"></a></li>
			<li><a href="https://www.youtube.com/channel/UCcxHb3nbSkTEmpFBN9126uA" target="_blank" class="li fa fa-youtube fa-xl redes-sociales-responsive 1h-1" style="padding-top: 25%; padding-left: 52%; font-size: 45px; background: #e52d27; /* fallback for old browsers */
					background: -webkit-linear-gradient(to right, #e52d27, #b31217); /* Chrome 10-25, Safari 5.1-6 */
					background: linear-gradient(to right, #e52d27, #b31217); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
					-webkit-background-clip: text;
					color: transparent;"></a></li>

			<li><a href="https://www.instagram.com/gpandtps/" target="_blank" class="li fa fa-instagram redes-sociales-responsive" style="padding-top: 25%; padding-left: 52%; font-size: 45px; background: #833ab4;  /* fallback for old browsers */
					background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);  /* Chrome 10-25, Safari 5.1-6 */
					background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
					-webkit-background-clip: text;
					color: transparent;"></a></li>
			<li><a href="https://www.facebook.com/gpandtps" target="_blank" class="li fa fa-facebook redes-sociales-responsive" style="padding-top: 25%; padding-left: 45%; font-size: 45px; background: #3b5998;  /* fallback for old browsers */						
					-webkit-background-clip: text;
					color: transparent;"></a></li>
		  para hacer que el usuario abra su cuenta de correo con la dirección de correo 
				<a href="mailto:victor.hernandez8700@alumnos.udg.mx"><li class="fa fa-twitter redes-sociales-responsive" style="font-size: 50px; background: #1da1f2;  /* fallback for old browsers */						
					-webkit-background-clip: text;
					color: transparent;"></li></a>
				-->
		</ul>
	</div>
	<!--Final Sidebar|Barra lateral-->

	@yield('content')


	<!--Inicio Footer-->
	<footer class="ftco-footer  ftco-section">
		<div class="container d-flex mx-auto">
			<div class="row mb-5">
				<img src="images/1-logo_udg.png" style="padding-right: 3%; height: 250px;" class="float-left">
				<div class="col-md-4 col-lg-3">
					<div class="ftco-footer-widget mb-5">
						<p>&nbsp; &nbsp;</p>
						<h2 class="ftco-heading-2">Universidad De Guadalajara</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text-justify">
										<p>Centro Universitario De
											Ciencias Sociales y Humanidades (Cucsh)</p>
										<p>Edificio F4, Primer Piso</p>
										<p>Sede Los Belenes. Av. José Parres Arias #150, San José del Bajío, C. P.
											45100.</p>
										<p>Zapopan, Jalisco, México.</p>
									</span></li>

								<li><span class="icon icon-phone"></span><span class="text-justify">
										<p>+52 (33) 3819 3300.
										<p>Extensiones 23541 y 23656</p>
									</span></li>
								<li><span class="icon icon-envelope"></span><span class="text-justify">
										<p><b>&nbsp;mtria.globalpolitics@academicos.udg.mx</b></p>
									</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-5 ml-md-4">
						<p>&nbsp;</p>
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled text-justify">
							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Inicio</a>
							</li>
							<li><a href="http://www.cucsh.udg.mx/apoyo-cursos"><span class="ion-ios-arrow-round-forward mr-2"></span>Ayuda Cursos
									Virtuales</a></li>
							<li><a href="http://www.udgvirtual.udg.mx/atencion-contacto"><span class="ion-ios-arrow-round-forward mr-2"></span>Ayuda Correo
									Institucional</a></li>
							<li><a href="https://outlook.com/alumno.udg.mx"><span class="ion-ios-arrow-round-forward mr-2"></span>Outlook
									UdeG</a></li>
							<li><a href="{{route('avisos-privacidad')}}" target="_BLANK"><span class="ion-ios-arrow-round-forward mr-2"></span>Avisos de Privacidad</a>
							</li>
							<li><a href="{{route('contacto')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Contacto</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-5">
						<p>&nbsp;</p>
						<h2 class="ftco-heading-2 mb-0 d-flex mx-auto" style="padding-left: 3%;">Redes Sociales</h2>
						<!-- SM icons -->
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-1">
							<a href="https://twitter.com/gpandtps" class="fa fa-twitter" style="font-size: 50px; background: #1da1f2;  /* fallback for old browsers */						
						-webkit-background-clip: text;
						color: transparent;"></a>
							<a href="https://www.youtube.com/channel/UCcxHb3nbSkTEmpFBN9126uA" class="fa fa-youtube fa-xl" style="font-size: 50px; background: #e52d27; /* fallback for old browsers */
						background: -webkit-linear-gradient(to right, #e52d27, #b31217); /* Chrome 10-25, Safari 5.1-6 */
						background: linear-gradient(to right, #e52d27, #b31217); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
						-webkit-background-clip: text;
						color: transparent;"></a>
							<!--<a href="#" class="fa fa-linkedin"></a>-->
							<a href="https://www.instagram.com/gpandtps/" class="fa fa-instagram" style="font-size: 50px; background: #833ab4;  /* fallback for old browsers */
							background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);  /* Chrome 10-25, Safari 5.1-6 */
							background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
							-webkit-background-clip: text;
							color: transparent;"></a>
							<a href="https://www.facebook.com/gpandtps" class="fa fa-facebook" style="font-size: 50px; background: #3b5998;  /* fallback for old browsers */						
						-webkit-background-clip: text;
						color: transparent;"></a>
							<!--<a href="#" class="fa fa-vimeo"></a>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--Final Footer-->
	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>




	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/scrollax.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script type="text/javascript" src="{{ asset('js/google-map.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>

</html>