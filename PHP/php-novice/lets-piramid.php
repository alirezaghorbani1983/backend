<?php

$stapels = readline("Hoeveel stapels wil je hebben?" . PHP_EOL);

$i = 0;
while ($i < $stapels) {
    $j = 0;
    while ($j <= $i) {
        echo "*";
        $j++;
    }

    echo PHP_EOL;
    $i++;
}