<?php

function sumofMultiple($x, $y, $limit, $sum=0){

	for ($i=1;$i<$limit;$i++) {
	  
	  if ($i%$x==0 || $i%$y==0)
	  	$sum = $sum+$i;
	
	}

	return $sum;

}