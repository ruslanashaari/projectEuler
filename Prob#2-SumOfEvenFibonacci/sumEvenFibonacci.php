<?php

function sumEvenFibonacci($limit){

	$current = $temp1 = 1;
	$temp2 = 0;
	$sum = 0;

	while ($current <= $limit) {

		if ($current%2 == 0) 
			$sum = $sum + $current;

		$current = $current + $temp2; 
		$temp2 = $temp1; 
		$temp1 = $current; 
	}

	return $sum;
}