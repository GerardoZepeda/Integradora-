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
	
	$saldo = $_POST['saldo'];
	$pago = $_POST['pago'];
	$estatus = $_POST['estatus'];
	$targeta = $_POST['targeta'];
	$num = $_POST['num'];
	$anio = $_POST['anio'];
	$mes = $_POST['mes'];
	
	$consulta = "INSERT INTO Cuenta(Saldo, TipoPago, Estatus, TipoTarjeta, NumTarjeta, AnioVen, MesVen) VALUES('$saldo','$pago','$estatus','$targeta','$num','$anio','$mes')";
	
	$conexion->exec($consulta);
	
	header('Location: tarjeta.html');
?>