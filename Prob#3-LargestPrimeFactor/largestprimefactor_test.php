<?php

require 'largestprimefactor.php';

class PrimeFactor extends PHPUnit\Framework\TestCase {

	public function testfindinglargestprimefactorof13195() {
		$this->assertEquals(29, largestprimefactor(13195));
	}
}