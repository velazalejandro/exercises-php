<?php
	session_start();
	$_SESSION["nombre"]=$_POST["nombre"];
	$_SESSION["apellido"]=$_POST["apellido"];
	print "Hola ". $_SESSION["nombre"]."<br>";
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Sesiones</title>
</head>
<body>
	<h3>Ejemplo de sesiones</h3>
	<a href="sesion4.php">Volver a la pagina de inicio
</body>
</html>