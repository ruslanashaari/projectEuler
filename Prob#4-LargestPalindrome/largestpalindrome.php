<?php

function largestpalindrome($digit) {
	for ($i=99; $i>9; $i--) { 
		for ($j=99; $j<9; $j--) {
			if (isPalindrome($i*$j)) {
				break;
			}
		}
	}

	return $i." ".$j;
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