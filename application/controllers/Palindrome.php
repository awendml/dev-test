<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Palindrome extends CI_Controller {
    public function index()
    {
        $wordList = ['malam'];

        $this->palindromes($wordList);

    }

    public function palindromes($x) {
        $y = implode(" ", $x);

        if (strrev($y)==$y) {
            echo $y .' adalah palindrome';
        }else{
            echo $y . ' bukan palindrome';
        }
    }
}
