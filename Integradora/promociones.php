<!DOCTYPE html>
<?php
	$servidor = 'localhost';
	$login = 'root';
	$password = '';
	$database = 'DB_Agencia';
	$charset = 'UTF8';
	$port = 3306;
	
	try{
		$conexion = new PDO('mysql:host='.$servidor.';dbname='.$database.';charset='.$charset.';port='.$port, $login, $password);
	}
	catch(PDOException $error){
	   echo $error->getCode().' '.$error->getMessage();
	}
	$codigo_QR = "";
	$consultaTipo = "SELECT Tipo FROM Promocion WHERE CodigoQR='".$_POST['codigo_QR']."'";
	$resultadoTipo = $conexion->query($consultaTipo);
	$consultaDescripcion = "SELECT Descripcion FROM Promocion WHERE CodigoQR='".$_POST['codigo_QR']."'";
	$resultadoDescripcion = $conexion->query($consultaDescripcion);
	$consultaDescuento = "SELECT Descuento FROM Promocion WHERE CodigoQR='".$_POST['codigo_QR']."'";
	$resultadoDescuento = $conexion->query($consultaDescuento);
	$consultaFecha = "SELECT FechaInicio, FechaFinal FROM Promocion WHERE CodigoQR='".$_POST['codigo_QR']."'";
	$resultadoFecha = $conexion->query($consultaFecha);
?>
<html>
	<head>
		<title>www.Tornus.com</title>
		<link rel="stylesheet" href="estilos/estilos.css">
		<meta charset="utf-8">
	</head>
	<body>
		<section id="promocion">
			<div class="contenedor">
				<h3>Promoci&oacute;n</h3>
				<div class="contenedor-rutas">
					<div>
						<h4>Tipo: <?php echo $resultadoTipo ?></h4>
						<h5>Descripci&oacute;n</h5>
						<p><?php echo $resultadoDescripcion ?></p>
						<h5>Descuento</h5>
						<p><?php echo $resultadoDescuento ?></p>
						<h5>Fecha</h5>
						<p><?php echo $resultadoFecha ?></p>
					</div>
					<div>
						
					</div>
				</div>
			</div>
		</section>
		<footer>
			<p>TORNUS &copy; 2019</p>
		</footer>
	</body>
</html>