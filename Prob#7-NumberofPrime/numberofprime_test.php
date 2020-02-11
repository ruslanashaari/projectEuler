<?php

require 'numberofprime.php';

class numberofprimetest extends PHPUnit\Framework\Testcase {

	public function testfind1stofprime() {
		// $this->markTestSkipped();
		$this->assertEquals(2, numberofprime(1));
	}

	public function testfind2ndofprime() {
		// $this->markTestSkipped();
		$this->assertEquals(3, numberofprime(2));
	}

	public function testfind3rdofprime() {
		// $this->markTestSkipped();
		$this->assertEquals(5, numberofprime(3));
	}

	public function testfind4thofprime() {
		// $this->markTestSkipped();
		$this->assertEquals(7, numberofprime(4));
	}

	public function testfind5thofprime() {
		// $this->markTestSkipped();
		$this->assertEquals(11, numberofprime(5));
	}

	public function testfind6thofprime() {
		// $this->markTestSkipped();
		$this->assertEquals(13, numberofprime(6));
	}

	public function testfind10001stofprime() {
		$this->markTestSkipped();
		$this->assertEquals(13, numberofprime(10001));
	}
}