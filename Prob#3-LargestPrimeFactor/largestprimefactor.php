<?php

function largestprimefactor($number) {
	
	$largestprimefactor = 0;

	for ($x=2; $x<$number; $x++) {
		if ($number%$x == 0) { //is x is the factor of number
			for ($y=2; $y<$x; $y++) { 
				if ($x%$y != 0) //is x is a prime number
					break;
				else
					$largestprimefactor = $x;					
			}
			
		}
	}

	return $largestprimefactor;
}