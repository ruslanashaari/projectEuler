<?php

require "sumMultiple.php";

class sumMultipleTest extends PHPUnit\Framework\TestCase {

	public function test3and5Under1000(){
		$this->assertEquals(233168, sumofMultiple(3, 5, 1000)); //answer 233168 retrieved from https://math.stackexchange.com/a/9305 and confirmed in the original site
	}

}
