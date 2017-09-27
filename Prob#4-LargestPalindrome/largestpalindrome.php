<?php

function palindrome($digit, $i=0, $maxi=1) {

	for ($x=0; $x<$digit; $x++) { 
		$i = $i.'9';
		$maxi = $maxi.'0';
	}

	$i = (int) $i;
	$maxi = (int) $maxi / 10 -1;

	return largestpalindrome($i, $maxi);
}

function largestpalindrome($i, $maxi) {
	
	$largestpalin = 0;
	$j = $i;
	$maxj = $maxi;

	for ($k=$i; $k>$maxi; $k--) { 
		for ($l=$j; $l>$maxj; $l--) {
			if (isPalindrome($k*$l) && $k*$l > $largestpalin) {
				$largestpalin = $k*$l;
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