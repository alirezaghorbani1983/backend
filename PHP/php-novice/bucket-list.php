<?php

$aantal = readline("Hoeveel activiteiten wil je toevoegen?" . PHP_EOL);

if (!is_numeric($aantal)) {
    exit("'$aantal' is geen getal, probeer het opnieuw" . PHP_EOL);
}

$activiteiten = array();

for ($i = 1; $i <= $aantal; $i++) {
    $activiteit = readline("Wat wil jij toevoegen aan jouw bucket list?" . PHP_EOL);
    $activiteiten[] = $activiteit; // Voeg de activiteit toe aan de array
}

echo "Op jouw bucket list staat: " . PHP_EOL;

// foreach ($activiteiten as $activiteit) {
//     echo $activiteit . PHP_EOL;
// }
for ($i = 0; $i < $aantal; $i++) {
    echo $activiteiten[$i] . PHP_EOL;
}

?>

