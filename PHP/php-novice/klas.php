<?php

$studenten = readline("Wie zit er in de klas?" . PHP_EOL);

$studenten = explode(" ", $studenten);

echo "De studenten in de klas zijn : " . PHP_EOL;

foreach($studenten as $naam){
    echo $naam . PHP_EOL;
}
?>