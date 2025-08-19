<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FormularioArray</title>
</head>
<body>
	<form action="arrayFormulario.php">
	   Elige cualquier opción: <br />
	   <input type="checkbox" name="estudios[]" value="ESO" />ESO<br>
	   <input type="checkbox" name="estudios[]" value="Bachillerato" />Bachillerato<br>
	   <input type="checkbox" name="estudios[]" value="Grado" />Grado<br>
	   <input type="submit" />
	   </form>
<?php
if (isset($_GET["estudios"])) {
	print "Has estudiado: <br /><br />";
	foreach ($_GET["estudios"] as $cur) {
		print "$cur <br />";
	}
}
?>
</body>
</html>