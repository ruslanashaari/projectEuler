<?php

function largestpalindrome($digit) {
	$largestpalin = 0;

	for ($i=999; $i>100; $i--) { 
		for ($j=999; $j>100; $j--) {
			if (isPalindrome($i*$j) && $i*$j > $largestpalin) {
				$largestpalin = $i*$j;
			}
		}
	}

	return $largestpalin;
}

function isPalindrome($number, $reverse = 0, $div = 0) {
	$n = $number;

	while ($number>0) {
		$div = $number%10;
		$reverse = $reverse*10 + $div;
		$number = (int) ($number/10);
	}

	return ($reverse == $n ? true : false);
}