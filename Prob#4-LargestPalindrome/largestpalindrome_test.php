<?php

require 'largestpalindrome.php';

class palindrome extends PHPUnit\Framework\TestCase {
	public function testfindinglargestpalindromefromproductoftwo2digitnumbers(){
		$this->assertEquals(9009, largestpalindrome(2));	
	}

	public function testfindinglargestpalindromefromproductoftwo3digitnumbers(){
		$this->assertEquals(906609, largestpalindrome(3));	
	}
}