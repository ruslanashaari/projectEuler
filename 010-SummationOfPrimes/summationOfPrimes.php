<?php

class summationOfPrimes {

	public function handle($limit)
	{
		$sum = 0;

		foreach (range(2, $limit) as $index) {
			$sum = $sum + ($this->isPrime($index) ? $index : 0);
		}

		return $sum;
	}

	public function isPrime($number)
    {
    	for ($i = 2; $i <= sqrt($number); $i++) {
    		if ($number % $i == 0) {
    			return false;
    		}
    	}

    	return true;
    }

}