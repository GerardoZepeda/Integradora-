<!DOCTYPE html>
<?php
	$host = 'localhost';
	$database = 'DB_Agencia';
	$login = 'root';
	$pwd = '';
	$charset = 'UTF8';
	$port = 3306;
	
	$conexion = new PDO('mysql:host='.$host.';dbname='.$database,$login,$pwd);
	
	$pdo = new PDO('mysql:host='.$host.';dbname='.$database.';charset='.$charset.';port='.$port,$login,$pwd);
	
	try{
		$conexion = new PDO('mysql:host='.$host.';dbname='.$database.';charset='.$charset.';port='.$port,$login,$pwd);
	}
	
	catch (PDOException $error){
		echo $error->getcode().' '.$error->getMessage();
	}
?>
<html lang="es">
	<head>
		<link rel="stylesheet" href="estilos/estilos.css">
		<meta charset="utf-8">
		<title>www.Tornus.com</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="owl/owl.carousel.min.css">
		<link rel="stylesheet" href="owl/owl.theme.default.min.css">
	</head>
	<body>
		<header>
			<div class="menu">
				<div class="contenedor">
					<p class="logo">TORNUS</p>
					<nav>
						<ul>
							<li class="actual"><a href="index.html">Inicio</a> </li>
							<li><a href="promociones.php">Promociones</a> </li>
							<li><a href="Cuenta.html">Cuenta</a> </li>
							<li><a href="Hoteles.html">Hoteles y Ruta</a> </li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="contenedor" id="contenedor-titulo-flex">
				<div class="contenedor-titulo">
					<h1>TORNUS</h1>
					<h2>El unico y verdadero viaje es en ti</h2>
					<p class="logo"><img src="img/tornus.png" width=200px/></p>
				</div>
			</div>
		</header>
		<section id="iniciar">
			<div id="contenedor-sesion">
				<?php
				$consulta = "SELECT NomUsuario FROM Usuario WHERE NomUsuario='".$_POST['login']"'";
				$resultado= $conexion->query($consulta);
				echo $resultado; ?><button>Cerrar Sesi&oacute;n</button><?php header('Location: index.html'); ?>
			</div>
		</section>
		<main>
			<section id="servicios">
				<div class="contenedor">
					<h3>Rutas</h3>
					<div class="contenedor-rutas">
						<div>
							<img src="img/calvillo2.jpg">
						</div>
						<div class="texto">
								<h3 id="ser">Calvillo</h3>
								<p>Ofrecemos una de las mejores experiencias entorno a guias turisticas.</p>
								<p>Precio: $2000 - $3500</p>
								<iframe id="frame" src="https://www.google.com/maps/dir/21.8468195,-102.718558/Presa+de+Malpaso/21.9071513,-102.7512249/Parque+Acu%C3%A1tico+la+Cueva/@21.8444595,-102.7580527,13z/data=!4m16!4m15!1m0!1m5!1m1!1s0x8429cf3b0710106b:0x5191b367a5e2dbac!2m2!1d-102.6533184!2d21.8577099!1m0!1m5!1m1!1s0x842834b77bec77a3:0x9c54897937e98416!2m2!1d-102.8167426!2d21.8102694!3e0!5m1!1e1" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</section>
			<section id="mis-trabajos">
				<div class="contenedor">
					<h3>Rutas</h3>
					<div class="owl-carousel owl-theme">
						<div class="item" id="imagen"><img src="img/2.jpg" width=250 height=250 /></div>
						<div class="item" id="imagen"><img src="img/3.jpg" width=250 height=250 /></div>
						<div class="item" id="imagen"><img src="img/6.jpg" width=250 height=250 /></div>
						<div class="item" id="imagen"><img src="img/8.jpg" width=250 height=250 /></div>
						<div class="item" id="imagen"><img src="img/15.jpg" width=250 height=250 /></div>
						<div class="item" id="imagen"><img src="img/16.jpg" width=250 height=250 /></div>
						<div class="item" id="imagen"><img src="img/17.jpg" width=250 height=250 /></div>
						<div class="item" id="imagen"><img src="img/12.png" width=250 height=250 /></div>
						<div class="item" id="imagen"><img src="img/15.jpg" width=250 height=250 /></div>
					</div>
				</div>
			</section>
			<section id="servicios">
				<div class="contenedor">
					<h3>Servicios</h3>
					<div class="contenedor-servicios">
						<div class="servicio violeta">
							<h4>Rutas</h4>
							<p>Ofrecemos una de las mejores experiencias entorno a guias turisticas.<br/>
							Precio: $2000 - $3500</p>
							<img class="icono" id="rutasimg" src="img/rutas.png"/>
							<img class="ondas" src="img/waves.png"/>
						</div>
						<div class="servicio celeste">
							<h4>Hospedaje</h4>
							<p>Tenemos uno de los mejores hoteles 5 estrellas donde pasaras las mejores noches.<br/>
							Precio desde $1000 la noche.</p>
							<img class="icono" id="rutasimg" src="img/hoteles.png"/>
							<img class="ondas" src="img/waves.png"/>
						</div>
						<div class="servicio violeta">
							<h4>Paquetes</h4>
							<p>Ofrecemos una gran cantidad de paquetes con diferentes rutas y las mejores ofertas.<br/>
							Precio desde $3000.</p>
							<img class="icono" id="rutasimg" src="img/paquetes.png"/>
							<img class="ondas" src="img/waves.png"/>
						</div>
					</div>
				</div>
			</section>
		</main>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous"></script>
		<script src="owl/owl.carousel.min.js"></script>
		<script>
			$('.owl-carousel').owlCarousel({
				loop:true,
				margin:10,
				nav:true,
				dots:false,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
					items:4
					}
				}
			})
		</script>
		<footer>
			<p>TORNUS &copy; 2019</p>
		</footer>
	</body>
</html>