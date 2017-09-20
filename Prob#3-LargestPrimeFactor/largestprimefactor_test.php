<?php

require 'largestprimefactor.php';

class PrimeFactor extends PHPUnit\Framework\TestCase {

	public function finding largestprimefactorof13195() {
		$this->assertEquals(29, largestprimefactor(13195));
	}
}