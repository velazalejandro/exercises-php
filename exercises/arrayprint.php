<?php
for($i=0;$i<10;$i++) {
 $numero[$i]=$i;
}
//echo $numero."</br>";
for($i=0;$i<10;$i++) {
print $numero[$i] ."<br>";
}

print "________________________"."<br>";
//con count ()
	for($i=0;$i<count($numero);$i++) {
		print $numero[$i]."<br>";
		
	}
print "________________________"."<br>";
?>