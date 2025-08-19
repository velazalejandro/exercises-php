<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CONTADOR COOKIES</title>
</head>
<body>
		<h1>CONTADOR DE VISITAS<h1>
	
	<?php 
		/*setcookie("visitas");
		si existe un valor almacenamelo en la variable $c */
		if(isset($_COOKIE["visitas"])){ 
			$c=$_COOKIE["visitas"]
			print "veces: $c";
			setcookie("visitas",$c+1);
			/*print = ($_COOKIE["visitas"])."veces";*/
		}
	else
		{
			/*setcookie('visitas',1);*/
	print = 'Se van a crear cookies';
	setcookie ("visitas",1);
		}
?>

	
</body>
</html>