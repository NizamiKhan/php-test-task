<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Autoload.php');

$primeNumbers = new PrimeNumbers(10);
echo 'Сумма простых чисел: ' . $primeNumbers->summ();

//2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71
