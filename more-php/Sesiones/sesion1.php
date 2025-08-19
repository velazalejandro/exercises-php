<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SESION1</title>
</head>
<body>
	<?php
		print "hola" . $_SESSION['nombre'] . "<br>";
	?>

</body>
</html>