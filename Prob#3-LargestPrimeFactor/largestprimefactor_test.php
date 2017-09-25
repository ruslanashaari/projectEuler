<?php

require 'largestprimefactor.php';

class PrimeFactor extends PHPUnit\Framework\TestCase {

	public function testfindinglargestprimefactorof13195() {
		$this->assertEquals(29, largestprimefactor(13195));
	} 

	public function testfindinglargestprimefactorof600851475143() {
		$this->assertEquals(6857, largestprimefactor(600851475143));
	}
}