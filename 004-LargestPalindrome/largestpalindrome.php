<?php

function palindrome($digit, $i=0) {
	$time_start = microtime(true);

	for ($x=0; $x<$digit; $x++) { 
		$i = $i.'9';
	}

	return largestpalindrome((int) $i);
}

function largestpalindrome($i) {
	
	$largestpalin = 0;
	$j = $i;
	$min = $i/9;

	for ($k=$i; $k>$min; $k--) { 
		for ($l=$j; $l>$min; $l--) {
			$product = $k*$l;
			if (isPalindrome($product)) {
				if ($product > $largestpalin) {
					$largestpalin = $product;
				}
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

//need refactor