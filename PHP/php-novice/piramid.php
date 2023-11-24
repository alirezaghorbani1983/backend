<?php

$j = readline("Hoeveel stapels wil je hebben?" . PHP_EOL);

for ($i = 0; $i < $j; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}