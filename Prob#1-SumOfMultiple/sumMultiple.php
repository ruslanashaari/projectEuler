<?php

function sumofMultiple($x, $y, $limit){

	$multiplesX = listingArray($x, $limit);
	$multiplesY = listingArray($y, $limit);

	$multiplesXandY = array_unique(array_merge($multiplesX, $multiplesY));

	return array_sum($multiplesXandY);
}

function listingArray($param, $limit){
	$constantParam = $param;
	$arrayofparam = [];

	while ($param < $limit) {
		array_push($arrayofparam, $param);
		$param = $param + $constantParam;
	}

	return $arrayofparam;
}