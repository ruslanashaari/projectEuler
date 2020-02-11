	<?php

	require 'numberofprime.php';

	class numberofprimetest extends PHPUnit\Framework\Testcase {

		public function testfind1stofprime() {
			// $this->markTestSkipped();
			$prime = new NumberOfPrime(1);
			$this->assertEquals(2, $prime->numberofprime());
		}

		public function testfind2ndofprime() {
			// $this->markTestSkipped();
			$prime = new NumberOfPrime(2);
			$this->assertEquals(3, $prime->numberofprime());
		}

		public function testfind3rdofprime() {
			// $this->markTestSkipped();
			$prime = new NumberOfPrime(3);
			$this->assertEquals(5, $prime->numberofprime());
		}

		public function testfind4thofprime() {
			// $this->markTestSkipped();
			$prime = new NumberOfPrime(4);
			$this->assertEquals(7, $prime->numberofprime());
		}

		public function testfind5thofprime() {
			// $this->markTestSkipped();
			$prime = new NumberOfPrime(5);
			$this->assertEquals(11, $prime->numberofprime());
		}

		public function testfind6thofprime() {
			// $this->markTestSkipped();
			$prime = new NumberOfPrime(6);
			$this->assertEquals(13, $prime->numberofprime());
		}

		public function testfind10001stofprime() {
			$this->markTestSkipped();
			$prime = new NumberOfPrime(10001);
			$this->assertEquals(13, $prime->numberofprime(10001));
		}
	}