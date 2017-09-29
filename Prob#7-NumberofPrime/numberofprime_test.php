<?php

require 'numberofprime.php';

class numberofprimetest extends PHPUnit\Framework\Testcase {
	public function testfind6thofprime() {
		// $this->markTestSkipped();
		$this->assertEquals(13, numberofprime(6));
	}

	public function testfind10001stofprime() {
		$this->markTestSkipped();
		$this->assertEquals(13, numberofprime(10001));
	}
}