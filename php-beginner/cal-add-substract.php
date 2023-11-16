<?php
$operator = readline("Welke optie wil je uitvoeren? (+ , -)" . PHP_EOL);

$getal1 = readline("Eerste getal? " . PHP_EOL);
$getal2 = readline("Tweede getal? " . PHP_EOL);

if($operator === "+"){
    echo "Uw resultaat is: " . $getal1 + $getal2;
}elseif($operator === "-"){
    echo "Uw resultaat is : " . $getal1 - $getal2;
}

?>
