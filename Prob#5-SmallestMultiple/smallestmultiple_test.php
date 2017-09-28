<?php

require 'smallestmultiple.php';

class multiple extends PHPUnit\Framework\TestCase {
	public function testSmallestMultiple1to10() {
		$this->markTestSkipped();
		$this->assertEquals(2520, smallestmultiple(1, 10));
	}

	public function testSmallestMultiple1to20() {
		$this->assertEquals(232792560, smallestmultiple(1, 20));
	}
}