<?php
$personas=[
			["nombre"=>"Alejandro" , "telefono"=>666222111],
			["nombre"=>"Cristian" , "telefono"=>667543213],
			["nombre"=>"Manuel" , "telefono"=>698215303],
			];
	
	print "<p>Recorrer el array multidimensional con foreach</p>\n";
	print "\n";
	
	foreach($personas as $persona) {
		foreach($persona as $nombre=>$telefono) {
			print "$nombre : $telefono, ";
		}
		print "<br>";
	}
?>
