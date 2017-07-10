<?php

define("LIMIT", 2000000);
define("SQRT_LIMIT", floor(sqrt(LIMIT)));

$S = array_fill(2, LIMIT - 1, true);

for ($i = 2; $i <= SQRT_LIMIT; $i++) {
    if ($S[$i] === true) {
        for ($j = $i * $i; $j <= LIMIT; $j += $i) {
            $S[$j] = false;
        }
    }
}

var_dump($S);
//$primeNumbers = array_keys($S, true);
//var_dump($primeNumbers);