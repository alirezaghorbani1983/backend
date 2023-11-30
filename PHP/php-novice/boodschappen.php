<?php

function addToShoppingList(&$list, $product)
{

    echo "Je boodschappenlijstje bevat nu:" . PHP_EOL;
    foreach ($list as $value) {
        echo $value . PHP_EOL;
    }
}

function addItemToList($list)
{
    $product = readline("Wat wil je aan je boodschappenlijst toevoegen?");
    array_push($list, $product);
    return $list;
}

$list = [];
$list = addItemToList($list);


echo "Bedankt voor het gebruik van de boodschappenlijst!" . PHP_EOL;

while (strtolower(substr(trim(readline("Wil je meer producten toevoegen? (y/n)")), 0, 1)) === 'y') {
    $product = readline("Wat wil je aan je boodschappenlijst toevoegen?");
    addToShoppingList($list, $product);
    
}

?>