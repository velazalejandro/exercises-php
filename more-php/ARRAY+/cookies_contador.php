<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CONTADOR COOKIES</title>
</head>
<body>
	<?php 
		if(isset($_COOKIE['visitas']))
		{
			setcookie('visitas',$visitas+1),time()+3600*4);
	$mensaje = 'numero de visitas:' .$_COOKIE['visitas'];
		}
	else
		{
			setcookie('visitas',$visitas+1),time()+3600*4);
	$mensaje = 'Bienvendio por primera vez'
		}
</body>
</html>