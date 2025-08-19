<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array con cookies</title>
</head>
<body>
	
<?php
	//borrar cookie nombre
	setcookie("numero", "", time()-100);
	setcookie("nombre");
?>
</body>
</html>