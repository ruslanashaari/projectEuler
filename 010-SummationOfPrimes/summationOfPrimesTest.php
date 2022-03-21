<?php

require 'summationOfPrimes.php';

class summationOfPrimesTest extends PHPUnit\Framework\Testcase {
	
	public function testSumUnder10(){
		$this->assertEquals(17, handle(10));
	} 

	public function testSumUnder20(){
		$this->assertEquals(77, handle(20));
	} 

	public function testSumUnder30(){
		$this->assertEquals(129, handle(30));
	} 

	public function testSumUnder40(){
		$this->assertEquals(197, handle(40));
	} 

	public function testSumUnder50(){
		$this->assertEquals(328, handle(50));
	} 

	public function testSumUnder2M(){
		$this->assertEquals(1, handle(2000000));
	}

}