<?php

$aantalVrienden = readline("Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL);

if(!is_numeric($aantalVrienden)|| $aantalVrienden <= 0){
    exit("'geen' is geen geldig getal, probeer het opnieuw") . PHP_EOL;
}

$vriendenDromen = array();

for($i = 1; $i <= $aantalVrienden; $i++){
    $naam = readline("Wat is jouw naam?");
    $droom = readline("Wat is jouw droom?");
    
    $vriendenDromen[$naam] = $droom;
}

foreach($vriendenDromen as $naam => $droom){
    echo $naam . " heeft dit als droom: " . $droom . PHP_EOL;
}

?>