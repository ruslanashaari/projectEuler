

<?php

function largestprimefactor($number) {
	
	$largestprimefactor = 0;

	for ($i=3; $i<$number; $i++) { 
		if ($number%$i == 0 && $number%2 != 0) { 
			$largestprimefactor = $number/$i;
			$number = $largestprimefactor;
		}
	}

	return $largestprimefactor;
}