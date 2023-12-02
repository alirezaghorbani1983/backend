<?php

if(count($argv) <= 1 || count($argv) > 2){
    exit("Geen wisselgeld" . PHP_EOL);
}else{
    $bedrag = intval($argv[1]);
}

if ($bedrag == 0){
    echo "Geen wisselgeld" . PHP_EOL;
}

$bedrag10EuroBiljet = floor($bedrag / 10);
if($bedrag10EuroBiljet > 0){
    echo $bedrag10EuroBiljet . " x 10 euro" . PHP_EOL;
}

$bedrag5EuroBiljet = floor($bedrag % 10 / 5);
if($bedrag5EuroBiljet > 0){
    echo $bedrag5EuroBiljet . " x 5 euro" . PHP_EOL;
}

$bedrag2EuroMunt = floor($bedrag % 5 / 2);
if ($bedrag2EuroMunt > 0) {
    echo $bedrag2EuroMunt . " x 2 euro" . PHP_EOL;
}

$bedrag1EuroMunt = ($bedrag - ($bedrag10EuroBiljet * 10 + $bedrag5EuroBiljet * 5 + $bedrag2EuroMunt * 2));
if ($bedrag1EuroMunt > 0) {
    echo $bedrag1EuroMunt . " x 1 euro" . PHP_EOL;
}

?>