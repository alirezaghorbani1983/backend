<?php

$n = readline("Van welke getal wil je de faculteit weten?") . PHP_EOL;

$faculteit = 1;
for($i = 1; $i <= $n; $i++){
    $faculteit = $faculteit * $i;
}
echo "Faculteit van $n is $faculteit" . PHP_EOL;
?>