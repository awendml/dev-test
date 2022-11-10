<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Palindrome extends CI_Controller {
    public function index()
	{
		$wordList = ['aku']; 
        $this->palindrome($wordList);
	}

    public function palindrome($x) 
    {
    	$x = implode(" ", $wordList);
        if (strrev($x) == $x) {
        	echo 'Palindrome';
        }else{
            echo 'Bukan Palindrome';
        }
    }

}
