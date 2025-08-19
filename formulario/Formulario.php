<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>vehiculo</title>
</head>
<body>
<?php
if (empty($_POST["vehiculo"]) ||empty($_POST ["vehiculo"])) {
?>
	<form action="Formulario.php" method="post">
		<label for="vehiculo">vehiculo:</label>
		<input type="vehiculo" name="vehiculo"><br>
	<input type="submit">
</form>
<?php }
else {
		$vehi=$_POST["vehiculo"];
		if ($vehi!="coche" || $vehi|="moto")
			{ print "No has seleccionado vehiculo <br><br>";
			print "<a href=Formulariovehiculos.php>Vuelve a introducir datos</a>";}
		else {print "<p>Hola $_POST[nombre]</p>\n";}
	}
?>
</body>
</html>