<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php

		setcookie("notas[Ana]","5");
		setcookie("notas[Carlos]","6");
		setcookie("notas[Sol]","8");
		setcookie("notas[Marta]","7");
		//$_COOKIE["notas"]

		if (isset($_COOKIE["notas"])) {
			// code...
			foreach ($_COOKIE["notas"] as $name => $value) {
				// code...

				//BORRAR LA COOKIKE
					//	setcookies("notas[$clave]"); 
			print "$name -> $value <br>";	
			}
		}


	?>
</body>
</html>