<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>
	<form action="Formulariocookie.php" method="post">
	<p>Ingrese su nombre:<input type="text" name="nombre"></p>
	<p><input type="submit" name="enviar" value="enviar"></p>
	</form>
<?php
if(isset($_POST["enviar"])) {
	$nombre=$_POST["nombre"];
	setcookie("nombre_cookie",$nombre,time()+30*24*60*60);//guardamos la cookie
	
	echo "El valor de la cookie nombre_cookie es:".$_COOKIE["nombre_cookie"];//valor imprimido
	}
?>
</body>
</html>