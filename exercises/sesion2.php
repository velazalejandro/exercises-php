<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Sesion1</title>
</head>
</body>
<?php
	print "Hola ".$_SESSION["nombre"]."<br>";
?>
</body>
</html>