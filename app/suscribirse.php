<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <? include_once "meta.php";?>

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Cookie|Open+Sans:400,600,700,800,900|Poppins:300,400,500,600,700|Playfair+Display:400,400i,700,700i,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/components/datepicker.css" type="text/css" />

	<!-- restaurant Demo Specific Stylesheet -->
	<link rel="stylesheet" href="demos/restaurant/restaurant.css" type="text/css" />
	<link rel="stylesheet" href="demos/restaurant/css/fonts.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<link rel="stylesheet" href="css/colors.php?color=f68c3d" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Sueña en Grande - Suscribirse</title>

</head>

<body class="stretched sticky-footer page-transition" data-loader-html="<span class='pizza'> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> </span>">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	<? include_once "menu.php";?>

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-reservation h-auto include-header">

			<div class="gmap min-vh-60 min-vh-lg-100" style="background-image: url('demos/restaurant/images/vem.jpg'); background-size: cover"></div>

			<div class="p-5 reservation-form rounded bg-white">
				<h3 class="font-secondary h1 color">Suscribirse</h3>
				<div>Completar todos los campos es obligatorio.</div>

				<div class="form-widget mt-4 mt-lg-0" data-loader="button">

					<div class="form-result"></div>

					<form class="mb-0 row" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

						<div class="form-process">
							<div class="css3-spinner">
								<div class="css3-spinner-scaler"></div>
							</div> 
						</div>

						<div class="col-sm-6 mb-3">
							<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Nombre" />
						</div>
                        <div class="col-sm-6 mb-3">
							<input type="text" id="template-contactform-idade" name="template-contactform-idade" value="" class="sm-form-control border-form-control required" placeholder="Edad" />
						</div>
						<div class="col-sm-6 mb-3">
							<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="E-mail" />
						</div>
                        <div class="col-sm-6 mb-3">
							<input type="text" id="template-contactform-celular" name="template-contactform-celular" value="" class="required sm-form-control border-form-control" placeholder="Teléfono móvil/WhatsApp" />
						</div>
                        <div class="col-sm-6 mb-3">
							<input type="text" id="template-contactform-instagram" name="template-contactform-instagraml" value="" class="required sm-form-control border-form-control" placeholder="Instagram" />
						</div>
                        <div class="col-sm-6 mb-3">
							<input type="text" id="template-contactform-cidade" name="template-contactform-cidade" value="" class="required sm-form-control border-form-control" placeholder="Ciudad" />
						</div>
                        <div class="col-sm-6 mb-3">
							<input type="text" id="template-contactform-estado" name="template-contactform-estado" value="" class="required sm-form-control border-form-control" placeholder="Estado" />
						</div>
                        <div class="col-6 mb-3">
							<select class="custom-select sm-form-control border-form-control"  id="template-contactform-estado" name="template-contactform-estado">
								<option value="disabled" value="" disabled selected>País</option>
                                <option value="AR">Argentina</option>
                                <option value="PE">Peru</option>
                                <option value="BO">Bolivia</option>
                                <option value="EC">Ecuador</option>
							</select>
						</div>

                        

						<div class="col-6 mb-3">
							<select class="custom-select sm-form-control border-form-control"  id="template-contactform-nivel" name="template-contactform-nivel">
                            <option value="disabled" disabled selected>Nivel de escolaridad</option>
								<option value="No comencé la secundaria">No comencé la secundaria</option>
								<option value="Primero año">Primero año</option>
                                <option value="Segundo año">Segundo año</option>
                                <option value="Tercero año">Tercero año</option>
                                <option value="Terminé la escuela secundaria">Terminé la escuela secundaria</option>
                                <option value="Ya comencé la universidad">Ya comencé la universidad</option>

							</select>
						</div>
                        <div class="clear"></div>
                        <div class="col-sm-6 mb-3">
							<input type="text" id="template-contactform-curso" name="template-contactform-curso" value="" class="required sm-form-control border-form-control" placeholder="¿Qué curso quieres tomar?" />
						</div>
                        <div class="col-sm-6 mb-3">
							<input type="text" id="template-contactform-universidade" name="template-contactform-universidade" value="" class="required sm-form-control border-form-control" placeholder="¿En qué universidad quieres estudiar?" />
						</div>
					

						<div class="clear"></div>

						<div class="col-12 mb-0">
							<button class="button button-circle button-large text-white ms-0 mt-3" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Enviar Formulario</button>
						</div>

						<div class="clear"></div>

						<div class="col-12 d-none">
							<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
						</div>

						<input type="hidden" name="prefix" value="template-contactform-">

					</form>

				</div>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

		</section><!-- #content end -->

		<? include_once "base.php";?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-line-arrow-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

	<!-- Travel Demo Specific Script -->
	<script src="js/components/datepicker.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<script>

		$(function() {
			$('.travel-date-group').datepicker({
				autoclose: true,
				startDate: "today",
				todayHighlight: true
			});
		});


	</script>

</body>
</html>