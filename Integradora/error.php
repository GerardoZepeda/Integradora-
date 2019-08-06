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
	echo $error." solo usuarios registrados pueden ver las promociones";
?>