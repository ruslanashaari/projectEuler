<?php

function largestprimefactor($number) {
	
	$x = $number;
	$largestprimefactor = 0;

	while ($x>0) {
		for ($i=1; $i<=$number; $i++) { 
			if ($i%2==0 && $x%2==0) {
				if ($i>$x && $i>$largestprimefactor) {
					$largestprimefactor = $i;
				} elseif ($x>$i && $x>$largestprimefactor) {
					$largestprimefactor = $x;
				}
			}

			$x--;
		}
	}

	return $largestprimefactor;
}