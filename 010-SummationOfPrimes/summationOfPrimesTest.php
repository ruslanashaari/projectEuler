<?php

require 'summationOfPrimes.php';

class summationOfPrimesTest extends PHPUnit\Framework\Testcase {
	
	public function testSumUnder10(){
		$sumOfPrime = new summationOfPrimes();
		$this->assertEquals(17, $sumOfPrime->handle(10));
	} 

	public function testSumUnder20(){
		$sumOfPrime = new summationOfPrimes();
		$this->assertEquals(77, $sumOfPrime->handle(20));
	} 

	public function testSumUnder30(){
		$sumOfPrime = new summationOfPrimes();
		$this->assertEquals(129, $sumOfPrime->handle(30));
	} 

	public function testSumUnder40(){
		$sumOfPrime = new summationOfPrimes();
		$this->assertEquals(197, $sumOfPrime->handle(40));
	} 

	public function testSumUnder50(){
		$sumOfPrime = new summationOfPrimes();
		$this->assertEquals(328, $sumOfPrime->handle(50));
	} 

	public function testSumUnder2M(){
		$sumOfPrime = new summationOfPrimes();
		$this->assertEquals(142913828922, $sumOfPrime->handle(2000000));
	}

}