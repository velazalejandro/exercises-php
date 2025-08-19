<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORMULARIO ARRAY</title>
</head>
<body>
<form action="arrayf1.php">
	ELIGE ENTRE LAS SIGUIENTES  PIZZAS: <br/>
	<input type="checkbox" name="pizzas[]" value="TE GUSTA LA MARGARITA">MARGARITA </br>
	<input type="checkbox" name="pizzas[]" value="EL QUESO ES TU ALIADO">4QUESOS</br>
	<input type="checkbox" name="pizzas[]" value="VIVA LA CARNE">BACONCRiSPY</br>
	<input type="checkbox" name="pizzas[]" value="AL ESTILO AMERICANO">DELICHEESE</br>
	<input type="submit" >ENVIAR

	<?php
		if (isset($_GET['pizzas'])){
	print "HAS ESCOGIDO: ";
	foreach ($_GET["pizzas"] as $pizza){
	print "$pizza <br>";
		}
	}
/*

	if (empty($_GET)){
		print("No has escogido nada")
	else (
		print "($_GET['nombre'])")
	}

	*/
	?>
</form>
</body>
</html>
