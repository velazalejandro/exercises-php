<!DOCTYPE HTML>
<html>
<head>
<title>Formulario</title>
</head>
<body>
<form action="Formulariovehiculos.php">
	   Elige cualquier opción: <br />
	   <input type="checkbox" name="vehiculos[]" value="coche" />COCHE<br>
	   <input type="checkbox" name="vehiculos[]" value="moto" />MOTO<br>
	   <input type="submit" />
	   </form>
<?php
if (isset($_GET["vehiculos"])) {
	print "Has elegido: <br /><br />";
	foreach ($_GET["vehiculos"] as $cur) {
		print "$cur <br />";
	}
}

else {
		$vehi=$_POST["vehiculos"];
		if ($vehi!="coche" || $vehi|="moto")
			{ print "No has seleccionado vehiculo <br><br>";
			print "<a href=Formulariovehiculos.php>Vuelve a introducir datos</a>";}
		else {print "<p>Hola $_POST[nombre]</p>\n";}
	}
?>
</body>
</html>


<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
</head>
<body>
<p>Bienvenido a la de agencia de seguros.</p><br>
<form method="post" action="Formulariovehiculos.php">
<p>Número del precio del seguro:</p>
<input type="text" name="numero"><br>
<p>Escriba el Nombre del vehiculo:</p>
<input type="text" name="nombre"><br>
<p>Pulse el siguiente botón.</p><br>
<input type="submit">
</form
</body>
</html>