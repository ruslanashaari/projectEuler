<?php

require 'largestprimefactor.php';

class PrimeFactor extends PHPUnit\Framework\TestCase {

	public function finding largestprimefactorof13195() {
		$this->assertEquals(5713, largestprimefactor(13195));
	}
}