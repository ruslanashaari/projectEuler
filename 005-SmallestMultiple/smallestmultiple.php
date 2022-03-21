<?php

function smallestmultiple($min, $max) {
	$x = 2;

	for ($i=$min; $i<=$max; $i++) { 
		while ($x%$i!=0) {
			$x++;
			$i = 1;
			break;
		}
	}

	return $x;
}