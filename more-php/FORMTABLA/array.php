<?php
//ejemplo 1 llenar
for ($i=0; $i < 10; $i++) {
	print $numeros[$i]=$i;
}
//ejemplo para raid de 2 en 2
for ($i=0; $i < 10; $i+=2) {
	print $numeros[$i]."<br>";
} 
print "------------------------------------------------------"."<br>";

//con count ()
for ($i=0;$i<count($numeros); $i++) {
	print $numeros[$i]."<br>";
}
print "--------------------------------------------------"."<br>";


//ejemplo decremento
for ($i=10; $i > 0 ; $i++) {
	print $numeros[$i]=$i;
}