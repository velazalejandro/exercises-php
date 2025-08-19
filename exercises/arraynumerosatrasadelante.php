<?php
for($i=0;$i<10;$i++) {
 $numero[$i]=$i;
}
//echo $numero."</br>";
for($i=0;$i<10;$i+=2) {
print $numero[$i] ."<br>";
}

print "________________________"."<br>";
//con count ()
	for($i=count($numero)-1;$i>=0;$i--) {
		print $numero[$i]."<br>";
		
	}
print "________________________"."<br>";
?>