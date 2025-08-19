<?php
$ejemplo=[[2,"juan","3"],[5,"paco",9], ["654788471",4,5]];
print "<pre>";
print_r ($ejemplo);

foreach ($ejemplo as $fil) {
	foreach ($fil as $val) {
		print $val. " ";
	}
	print "<br>";
}
print "<br>----------------------------------------------------";
?>
