<?php
setcookie("numero",303030);
if(isset($_COOKIE["numero"])) {
	$n=$_COOKIE["numero"];
	print "el numero es: $n";
}
?>