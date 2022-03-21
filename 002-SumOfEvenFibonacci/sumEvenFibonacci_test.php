<?php

require "sumEvenFibonacci.php";

class sumEvenFibonacciTest extends PHPUnit\Framework\TestCase {

	public function testSumUnder10(){
		$this->assertEquals(10, sumEvenFibonacci(10));
	} 

	public function testSumUnder20(){
		$this->assertEquals(10, sumEvenFibonacci(20));
	} 

	public function testSumUnder30(){
		$this->assertEquals(10, sumEvenFibonacci(30));
	} 

	public function testSumUnder40(){
		$this->assertEquals(44, sumEvenFibonacci(40));
	} 

	public function testSumUnder50(){
		$this->assertEquals(44, sumEvenFibonacci(50));
	} 

	public function testSumUnder4M(){
		$this->assertEquals(4613732, sumEvenFibonacci(4000000));
	} 
}