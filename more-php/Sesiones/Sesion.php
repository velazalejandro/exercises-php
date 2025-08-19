
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SESION</title>
</head>
<body>
	<?php 

	/*para crear la sesion*/
	//ojo: siemrpe session_start.
	session_start();
	$_SESSION["nombre"]="ANA";
	//$_SESSION["nombre"]=$_GET['nombre'];
	//$_SESSION["nombre"]=$_POST['nombre'];
	//$_SESSION["nombre"]=$_COOKIE['nombre'];
	print "LA SESION ES $_SESSION";
	?>

</body>
</html>