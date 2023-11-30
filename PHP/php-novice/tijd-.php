
<?php

if (count($argv) < 2){
    echo "Geen tijd meegegeven" . PHP_EOL;
    exit(0);
}

$total_seconden = 0;

for($i= 1; $i < count($argv); $i++){

    $invoer = $argv[1];

    $waarde = (int)(substr($invoer, 0, -1));

    $eenheid = substr($invoer, -1);

    switch($eenheid){
        case "d":
            $total_seconden += 60 * 60 * 24 * $waarde;
            break;
         case "u":
            $total_seconden += 60 * 60 * $waarde;
            break;
        case "m":
            $total_seconden += 60 * $waarde;
            break;
        case "s":
            $total_seconden +=  $waarde;
            break;                                      
    }
}
echo "De totale tijd is " . $total_seconden . " seconden" . PHP_EOL;
?>