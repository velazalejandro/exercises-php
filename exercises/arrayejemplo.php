<?php
$edad["Ana"]=30;
$edad["Sol"]=18;

$edad=["Ana"=>30,"Sol"=>18];

print "La edad de Ana es: $edad[Ana]";
print "La edad de Sol es: $edad[Sol]";

print "<p>Recorrer el array asociativo con foreach</p>\n";
print "\n";

foreach($edad as $ind=>$val) {
	print "Nombre $ind edad $val "."<br>";
}

print "<pre>";
print_r($edad);
print "</pre>";
//$mezcla=array("Ana"=>30.2020,3=>33,"Sol"=>18,44);
//print_r($mezcla);

foreach($edad as $val) {
	printf ("%4d %s",$val);
}

?>