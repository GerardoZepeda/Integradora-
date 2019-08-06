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
	$login_valido = "";
	$pwd_valida = "";

	if (isset($_POST['login']) && isset($_POST['pwd'])) {
		$consulta = "SELECT NomUsuario, Contrasena FROM Usuario WHERE NomUsuario='".$_POST['login']."' AND Contrasena='".$_POST['pwd']."'";
		$resultado = $conexion->query($consulta);
	
		while($registro = $resultado->fetch()){
			$login_valido = $registro['NomUsuario'];
			$pwd_valida = $registro['Contrasena'];
		}
		if (isset($login_valido) && isset($pwd_valida)) {
			session_start ();
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['pwd'] = $_POST['pwd'];
			header ('Location: index.php');
		}
		else {
			echo '<body onLoad="alert(\'Usuario desconocido\')">';
			echo '<meta http-equiv="refresh" content="0;URL=index.html">';
		}
	}
	else {
		echo 'El nombre de usuario o la contrase&ntilde;a introducidos son incorrectos.';
	}
?>