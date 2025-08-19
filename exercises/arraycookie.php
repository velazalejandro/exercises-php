<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array con cookies</title>
</head>
<body>
	
<?php
	setcookie("notas[Ana]",5);
	setcookie("notas[Carlos]",6);
	setcookie("notas[Sol]",8);
	setcookie("notas[Pedro]",7);
	
	if(isset($_COOKIE["notas"])) {
	foreach($_COOKIE["notas"] as $name => $value) {
		print "$name -> $value <br>";
	}
}
	print "<pre>";
	print_r($_COOKIE);
	print "</pre>"
?>
</body>
</html>