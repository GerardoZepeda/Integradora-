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
	
	$usuario = $_POST['username'];
	$pass = $_POST['pass'];
	$nombre = $_POST['nombre'];
	$apellidoP = $_POST['appaterno'];
	$apellidoM = $_POST['apmaterno'];
	$correo = $_POST['correo'];
	$tel = $_POST['tel'];
	$direccion = $_POST['direccion'];
	$curp = $_POST['curp'];
	$rfc = $_POST['rfc'];
	$estatus = $_POST['estatus'];
	
	$consulta = "INSERT INTO Usuario(NomUsuario, Contrasena, Nombre, ApPaterno, ApMaterno, Correo, Telefono, Direccion, CURP, RFC, Estatus) VALUES('$usuario','$pass','$nombre','$apellidoP','$apellidoM','$correo','$tel', '$direccion', '$curp', '$rfc', '$estatus')";
	
	$conexion->exec($consulta);
	
	header('Location: cuenta.html');
?>