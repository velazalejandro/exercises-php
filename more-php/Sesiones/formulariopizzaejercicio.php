<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PAGINAEJERCICIOSESION</title>
</head>
<body>
	<form action="formulariopizzaejercicio.php>">
	<label for="nombre">NOMBREPIZZA</label>
	<input type="test" name="nombre"><br>
	<label for="masa">MASA</label>
	<input type="test" name="masa"><br>
	<button>Enviar</button>
	<a href="formulariopizzaejercicio.php">Volver a la pagina


<?php 
	session_start();
	$_SESSION['nombre']=$_POST['nombre'];
	$_SESSION['masa']=$_POST['masa'];
	print "Hola" . "<br>". $_SESSION["nombre"] . "<br>" .$_SESSION["masa"]. "<br>";
	
?>
</body>
</html>