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
	
	$fecha = $_POST['fecha'];
	$pago = $_POST['pago'];
	
	$consulta = "INSERT INTO Historial(IdRuta, Fecha, Costo, Pago) VALUES(1,'$fecha',2000.00,'$pago')";
	
	$conexion->exec($consulta);
	
	header('Location: Hoteles.html');
?>