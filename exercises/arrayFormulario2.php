<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario con indice en array</title>
</head>
<body>
	<form action="arrayFormulario2.php">
	   Elige cualquier opción: <br />
	   <input type="checkbox" name="almacen[teclado]" value="3" id="teclado" />TECLADO<br>
	   <input type="checkbox" name="almacen[raton]" value="2" id="raton" />RATON<br>
	   <input type="submit" />
	   <input type="reset" name="" value="Borrar"/>
	   </form>
<?php
if (isset($_GET["almacen"])) {
	$almacen=$_GET["almacen"];
	print "Productos: <br /><br />";
	foreach ($_GET["almacen"] as $cla=> $val) {
		print "$cla quedan $val <br />";
	}
	print "________________"."<br/>";
	print_r ($almacen);
}
?>
</body>
</html>