<?php

define("MONEY_UNITS", [50, 20, 10, 5, 2, 1]);
if(count($argv) <= 1 || count($argv) > 2){
    exit("Geen wisselgeld" . PHP_EOL);
}else{
    $restBedrag = intval($argv[1]);
}

if ($restBedrag == 0){
    echo "Geen wisselgeld" . PHP_EOL;
}

foreach(MONEY_UNITS as $geldeenheid){
    if($restBedrag >= $geldeenheid){
        $aantalKeerGeldeenheidInRestbedrag = floor($restBedrag / $geldeenheid);
        $restBedrag = $restBedrag % $geldeenheid;

        echo $aantalKeerGeldeenheidInRestbedrag . " x " . $geldeenheid . " Euro" . PHP_EOL;
    }
    
}
?>