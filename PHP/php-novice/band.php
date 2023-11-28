<?php

$albums = [
    "Citizen of Glass" => 4.50,
    "Night" => 9,
    "New Eyes" => 5,
    "Strange Trails" => 10
];

$totalPrice= 0;

echo "Het album overzicht :" . PHP_EOL;

foreach($albums  as $naam => $prijs){
    echo $naam . "kost €" . $prijs . PHP_EOL;
    $totalPrice += $prijs; 
}

echo "Het totaalbedrag van alle albums is €" . $totalPrice . PHP_EOL;

echo "Het gemiddelde prijs van alle albums is €" . $totalPrice / count($albums) . PHP_EOL; 


?>