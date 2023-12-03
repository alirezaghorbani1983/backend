<?php

define("MONEY_UNITS", [50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05]);
define("CENTS_IN_EURO", 100);

function convertToCents($bedrag)
{
    $result = round($bedrag/ 0.05) * 0.05;

    return $result * CENTS_IN_EURO;
}

if (count($argv) != 2) {
    exit("Geen wisselgeld" . PHP_EOL);
} else {
    $restBedrag = convertToCents(floatval($argv[1]));
}

if ($restBedrag == 0) {
    exit("Geen wisselgeld" . PHP_EOL);
}

foreach (MONEY_UNITS as $geldeenheid) {
    $geldeenheid = $geldeenheid * CENTS_IN_EURO;

    if ($restBedrag >= $geldeenheid) {
        $aantalKeerGeldeenheidInRestbedrag = floor($restBedrag / $geldeenheid);
        $restBedrag= $restBedrag % $geldeenheid;

        if ($geldeenheid >= CENTS_IN_EURO) {
            echo $aantalKeerGeldeenheidInRestbedrag . " x " . $geldeenheid / CENTS_IN_EURO . " euro" . PHP_EOL;
        } else {
            echo $aantalKeerGeldeenheidInRestbedrag . " x " . $geldeenheid . " cent" . PHP_EOL;
        }
    }
}

?>