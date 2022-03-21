<?php

class largestaddictionproduct {
	protected $adjacent;
	protected $numbers;

	public function __construct($adjacent, $numbers)
	{
		$this->adjacent = $adjacent;
		$this->numbers = $numbers;
	}

	public function handle()
	{
		$arrNumbers = str_split($this->numbers);
		$arrLength = count($arrNumbers);
		$arrAdjacent = range(1, $this->adjacent);
		$product = 1;
		$largestProduct = 1;
		$limit = $arrLength - $this->adjacent;

		foreach (range(1, $arrLength) as $start) {
			if ($start >= $limit) {
				break;
			}

			foreach ($arrAdjacent as $adjacent) {
				$product = $product * (int) $arrNumbers[$start + $adjacent];

				if ($adjacent == $this->adjacent) {
					if ($product > $largestProduct) {
						$largestProduct = $product;
					}

					$product = 1;
				}				
			}
		}

		return $largestProduct;
	}
}