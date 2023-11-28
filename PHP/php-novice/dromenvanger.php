<?php

$aantal = intval(readline("Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL));

if(!$aantal){
    exit("Geen geldig aantal vrienden");
}

$bucketlist = [];

for($i = 1; $i <= $aantal; $i++){
    $naam = readline("Wat is jouw naam?" . PHP_EOL);

    $aantaldroom = intval(readline("Hoeveel dromen ga je opgeven?" . PHP_EOL));

    for($j = 1; $j <= $aantaldroom; $j++){
        $bucketlist[$naam][] = readline("Wat is jouw droom?" . PHP_EOL);
    
    }

}
foreach ($bucketlist as $naam => $dromen) {
    foreach ($dromen as $droom) {
        echo $naam . " heeft dit als droom: " .$droom . PHP_EOL;
    }
}

?>