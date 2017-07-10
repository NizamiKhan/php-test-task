<?php
define("LIMIT",1000000);
define("SQRT_LIMIT",floor(sqrt(LIMIT)));

$S = str_repeat("\1", LIMIT+1);

for($i=2;$i<=SQRT_LIMIT;$i++){
    if($S[$i]==="\1"){
        for($j=$i*$i; $j<=LIMIT; $j+=$i){
            $S[$j]="\0";
        }
    }
}

