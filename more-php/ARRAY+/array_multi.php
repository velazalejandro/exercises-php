<?php
$personas = [
	["nombre"=>"Pepe", "telefono"=>"654445645"],
	["nombre"=>"juan", "telefono"=>"654445645"],
	["nombre"=>"Marcos", "telefono"=>"654445645"]
];
foreach($personas as $ind=>$persona) {
foreach($persona as $nombre =>$telefono)
{
		print "$nombre"."$telefono <br>";
	}
}
/*$ejemplo=[[2,"juan","3"],[5,"paco",9], ["654788471",4,5]];
print "<pre>";
print_r ($ejemplo);

foreach ($ejemplo as $fil) {
	foreach ($fil as $val) {
		print $val. " ";
	}
	print "<br>";
}
print "<br>----------------------------------------------------";


}
*/

?>
