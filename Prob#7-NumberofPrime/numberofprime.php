<?php

class NumberOfPrime
{
	protected $number;

	public function __construct($number)
	{
		$this->number = $number;
	}

    function numberofprime()
    {
    	$max = 10;
    	// 3rd of primes
    	for ($i = 2; $i < $max; $i++) 
    	{
    			if ($this->isPrime($i)) 
    			{
					$prime[] = $i;

					if (count($prime) == $this->number)
					{
						return $i; 	
					}

					$max*=2;
    			}
    	}
    }

    function isPrime($number)
    {
    	for ($i = 2; $i <= sqrt($number); $i++) {
    		if ($number % $i == 0) {
    			return false;
    		}
    	}

    	return true;
    }
}