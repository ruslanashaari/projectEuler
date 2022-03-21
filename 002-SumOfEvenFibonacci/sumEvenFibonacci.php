<?php

function sumEvenFibonacci($limit){

	$temp1 = 1;
	$temp2 = 0;
	$sum = 0;

	for($current = 1; $current <= $limit; $current += $temp2){
		if ($current%2 == 0) 
			$sum += $current;

		$temp2 = $temp1; 
		$temp1 = $current; 
	}

	return $sum;
}