<?php

$places = [
    "Japan" => "Tokyo",
    "Mexico" => "Mexico-Stad",
    "de Verenigde Staten" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentinië" => "Buenos Aires",
    "Egypte" => "Cairo",
    "Engeland" => "Londen"
];

$correctAnswers = 0;

foreach($places as $land => $hoofdstad){
    $antwoord = readline("Wat is de hoofdstad van $land?" . PHP_EOL);

    if($antwoord == $hoofdstad){
        echo "Correct!" . PHP_EOL;
        $correctAnswers++;
    }else{
        echo "Helaas, " . $antwoord . " is niet de hoofdstad van " . $land . PHP_EOL;
        echo "Het correct antwoord is: " . $hoofdstad . PHP_EOL;
    }

    echo " Je hebt " . $correctAnswers . "van de " . count($places) . "geod geraden!" . PHP_EOL;
}

?>