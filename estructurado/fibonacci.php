<?php 

$n   = 0;
$sig = 1;
$lim = 10;

while ($i <= $lim) {
	echo $n."\n";
	$aux  = $sig;
	$sig += $n;
	$n    = $aux;
	$i++;
}

 ?>