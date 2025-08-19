<?php
	session_start();
	$_SESSION["nombre"]=$_POST["nombre"];
	$_SESSION["apellido"]=$_POST["apellido"];
	print "Hola" . "<br>". $_SESSION['nombre']. "<br>".$_SESSION["apellido"] ."<br>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sesiones</title>
</head>
<body>
	<h3>Ejemplo de sesiones<h3>
	<a href="session5.php">Volver a la pagina
</body>
</html>