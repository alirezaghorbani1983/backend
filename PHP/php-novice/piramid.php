<?php

$stapels = readline("Hoeveel stapels wil je hebben?" . PHP_EOL);

$z = "*";

for ($i = 0; $i < $stapels; $i++) {
    echo $z;
    $z .= "*";
    echo PHP_EOL; 
}
?>