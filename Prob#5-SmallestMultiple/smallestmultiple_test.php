<?php

require 'smallestmultiple.php'

class multiple extendss PHPUnit\Framework\TestCase {
	public function testSmallestMultiple() {
		$this->assertEquals(2520, smallestmultiple(1, 20));
	}
}