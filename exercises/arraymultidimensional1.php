<?php
	//escalar 3 filas 2 columnas
	$ejemplo=[[1,"Ana"],[true,4],[5,6]];
	print "<pre>";
	print_r($ejemplo);
	print "</pre>";
	
	print "________________con count_________________<br>";
	$col=2;
	for($i=0;$i<count($ejemplo);$i++) {//filas
		for($j=0;$j<2;$j++) {//columnas
			print $ejemplo[$i] [$j]." ";
		}
		print "<br>";
	}
	print "________________con foreach________________<br>";
	
	foreach($ejemplo as $fil) {
		foreach($fil as $val) {
			print $val. " ";
		}
		print "<br>";
	}
?>
