<?php

if(count($argv) <= 1 || count($argv) > 2){
    exit("Geen wisselgeld" . PHP_EOL);
}else{
    $bedrag = intval($argv[1]);
}

if ($bedrag == 0){
    echo "Geen wisselgeld" . PHP_EOL;
}else{
    echo $bedrag . " x 1 euro" . PHP_EOL;
}

?>