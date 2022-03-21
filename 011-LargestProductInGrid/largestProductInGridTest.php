<?php

require 'largestProductInGrid.php';

class largestProductInGridTest extends PHPUnit\Framework\Testcase {

	public function testLowestProduct()
	{
		$largestInGrid = new LargestProductInGrid();
		$this->assertEquals(1, $largestInGrid->handle());
	}

	public function testLargestProduct()
	{
		$largestInGrid = new LargestProductInGrid();
		$this->assertEquals(1, $largestInGrid->handle());
	}

}
