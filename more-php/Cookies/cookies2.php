<?php
setcookie ("numero",3023);
setcookie ("grupo","asir");
if(isset ($_COOKIE['numero2'])){
	$n=$_COOKIE["numero2"];
	print "el numero es: $n";

}
?>