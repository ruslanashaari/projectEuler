<?php

require 'sumsquaredifference.php';

class sumsquaredifference extends PHPUnit\Framework\TestCase {
	public function testSumSquareDiffof10n() {
		$this->markTestSkipped();
		$this->assertEquals(2640, sumsquaredifference(10));
	}

	public function testSumSquareDiffof100n() {
		// $this->markTestSkipped();
		$this->assertEquals(25164150, sumsquaredifference(100));
	}
}