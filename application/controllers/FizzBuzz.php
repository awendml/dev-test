<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FizzBuzz extends CI_Controller {
    public function index()
	{
		$node = 0;
        $fizz = 0;
        $buzz = 0;
        $this->fizzbuzz($node, $fizz, $buzz);
	}

    public function fizzbuzz($x, $y, $z) 
    {
        for ($i = 0; $i < 100; $i++) {
            
        
        if ($i  % 2 == 0) {
            $y = 'fizz';
            return $y;

        }else if($x % 3 == 0){
            $z = 'buzz';
            return $z;
        }else {
            return $x;
        }

    }
    }
}

