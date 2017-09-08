<?php

require "sumEvenFibonacci.php";

class sumEvenFibonacciTest extends PHPUnit\Framework\TestCase {

	public function testSumUnder1000000(){
		$this->assertEquals(, sumEvenFibonacci(1000000));
	} 
}