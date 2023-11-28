<?php

$aantal = readline("Hoeveel landen wil je toevoegen?" . PHP_EOL);

$landen = [];

for($i = 0; $i < $aantal; $i++){
    $land = readline("Welke land wil je toevoegen?" . PHP_EOL);
    $hoofdsatd = readline("Wat is de hoofdstad van $land?" . PHP_EOL);
    
    $landen[$land] = $hoofdsatd; 
}

echo "De volgende landen en steden zitten in de database:" . PHP_EOL;
    foreach ($landen as $land => $hoofdstad) {
    echo $land . ": " . $hoofdstad . PHP_EOL; // Correcte variabelenaam
}
?>