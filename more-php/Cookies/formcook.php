<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORMULARIOCOOKIES</title>
</head>
<body>
<form action="formcook.php">
	<input type="text" name="nombre[]" value=""/>INTRODUCE TU NOMBRE

</form>
<?php

	if (!empty($_COOKIE['nombre']))
		print "hola $_COOKIE['nombre']";

?>
</body>
</html>