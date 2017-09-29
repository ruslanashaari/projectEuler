<?php

function sumsquaredifference($number) {
	
	return squaresum($number) - sumsquare($number);
}

function squaresum($number, $squaresum=0) {
	for ($i=1; $i<=$number; $i++) { 
		$squaresum += $i;
	}

	return pow($squaresum, 2);
}

function sumsquare($number, $sumsquare=0) {
	for ($i=1; $i<=$number; $i++) { 
		$sumsquare += pow($i, 2);
	}

	return $sumsquare;
}