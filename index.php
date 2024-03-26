<?php 
	$datos = "inicio";
	$dir = "";
	include ($dir."php/ini_datos.php");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link href="<?php echo $dir.$css; ?>" rel="stylesheet" type="text/css" />
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta name="viewport" content="width=device-width,initial-scale=1"/>
 	<title><?php echo $title; ?></title>

	<link rel="stylesheet" href="css/nivo-slider.css">
	<link rel="stylesheet" href="css/mi-slider.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js"></script>

	<script type="text/javascript"> 
		$(window).on('load', function() {
		    $('#slider').nivoSlider(); 
		}); 
	</script>
 </head>
 <body>
 	<header>
 		<img class="delivery" src="img/delivery.png">
 		<img class="imgLinea" src="img/lineaVertical.png">
 		<div>
 			<h1>Delivery Express </h1>
 			<h2>...la solucion sin salir de casa.</h2> 			
 		</div>
 		<img class="imgLinea" src="img/lineaVertical.png">
 		<nav>
 			<ul class="menu" >
 				<li class="evento"><a href="">Inicio</a></li>
 				<li class="evento"><a href="">Servicios</a></li>
 				<li class="evento"><a href="">¿Quienes Somos?</a></li>
 				<li class="evento"><a href="">Contactanos</a></li>
 			</ul>
 		</nav>
 	</header>
 	<section>
			<?php include ($dir.$slider); ?>
			<?php include ($dir.$pag); ?>
			<?php include ($dir.$enterate); ?>
 	</section>

 	<footer>
			<?php include ($dir.$footer); ?>
 	</footer>
 </body>
 </html>