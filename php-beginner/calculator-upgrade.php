<?php
$operator = readline("Welke operatie wil je uitvoeren? (+ , -, %)" . PHP_EOL);

if($operator != "+" && $operator != "-" && $operator != "%"){
    echo "ongeldig" . PHP_EOL;
    exit("'ongeldgig' is geen geldige operatie");
}

$getal1 = readline("Eerste getal? " . PHP_EOL);
if (is_numeric($getal1) == false){
    echo "ongeldig" . PHP_EOL;
    exit($getal1 . "is geen getal");
}

$getal2 = readline("Tweede getal? " . PHP_EOL);
if (is_numeric($getal2) == false){
    echo "ongeldig" . PHP_EOL;
    exit($getal2 . "is geen getal");
}

if($operator === "+"){
    echo "Uw resultaat is: " . $getal1 + $getal2;
}elseif($operator === "-"){
    echo "Uw resultaat is : " . $getal1 - $getal2;
}elseif($operator === "-"){
    echo "Uw resultaat is : " . $getal1 % $getal2;
}

?>
