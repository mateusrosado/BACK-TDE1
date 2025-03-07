<?php
$num_brinq = 1;
$alt = 100;
$alt_brinq = [100];
$liberado = 0;

for ($i = 0; $i < $num_brinq; $i++){
	if ($alt >= $alt_brinq[$i]){
		$liberado++;
	}
}

echo $liberado++;
?>