<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORMULARIO ARRAY</title>
</head>
<body>
<form action="Formulario_array.php">
	ELIGE ENTRE LAS SIGUIENTES OPCIONES: <br/>
	<input type="checkbox" name="estudios[]" value="NADA,">NADA </br>
	<input type="checkbox" name="estudios[]" value="PRIMARIA">PRIMARIA </br>
	<input type="checkbox" name="estudios[]" value="SECUNDARIA">SECUNDARIA</br>
	<input type="checkbox" name="estudios[]" value="ESO">ESO</br>
	<input type="checkbox" name="estudios[]" value="BACHILLERATO">BACHILLER</br>
	<input type="checkbox" name="estudios[]" value="GRADO SUPERIOR">GRADO SUPERIOR</br>
	<input type="submit" />
	</br>
</form>
</br>
<?php
if (isset($_GET["estudios"])){
	print "HAS ESTUDIADO: ";
	foreach ($_GET["estudios"] as $cur) {
		print "$cur </br>";
	}
}
?>
</body>
</html>