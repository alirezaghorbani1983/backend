<?php

if (count($argv) < 2){
    exit(0);
}

$invoer = $argv[1];

$eenheid = substr($invoer, -1);

$waarde = (int)(substr($invoer, 0, -1));

if($eenheid == "d"){
    echo 60 * 60 * 24 * $waarde . " seconden" . PHP_EOL;
}elseif ($eenheid == "u"){
    echo 60 * 60 * $waarde . " seconden" . PHP_EOL;
}elseif($eenheid == "m"){
    echo 60 * $waarde . " seconden" . PHP_EOL;
}elseif($eenheid == "s"){
    echo $waarde . " seconden" . PHP_EOL;
}else{
    echo "Die eenheid is ongeldig" . PHP_EOL;
}
?>