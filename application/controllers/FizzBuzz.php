<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FizzBuzz extends CI_Controller {

    public function index() {

		$node = 0;
        $fizz = 0;
        $buzz = 0;
        $x = $this->fizzbuzzs($node, $fizz, $buzz);
	}

    public function fizzbuzzs($x, $y, $z) {
        for ($i = 0; $i <= 100; $i++) {
               if ($i % 2 === 0) {
                   echo ' Fizz ';
               }else if($i % 3 === 0){
                    echo ' Buzz ';
               }else if ($i % 3 !== 0 && $i % 2 !== 0) {
                    echo ' ' . $i ;    
               }

               
           }   
    }

}

