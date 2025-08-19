<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de cookie en php</title>
</head>
<body>
	<?php
	if($_COOKIE)
	{
		echo "Hay cookies: <br>";
		print_r($_COOKIE);
	}
	else
	{
		echo "No hay cookies :( <br>";
	}
	?>
	  <p>
		<strong>Hola, vamos a grabar en una cookie:</strong>
		</p>
			<form action="" method="post">
				Nombre: <input type="text" name="nombre"> <br> <br>
				Apellido: <input type="text" name="apellido"> <br> <br>
				<input type="submit" value="Guardar cookie">
			</form>
</body>
</html>
