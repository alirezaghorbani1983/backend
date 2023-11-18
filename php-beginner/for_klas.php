<?php

$klas = ["Sjonnie de Wiel", "Herman Kaal", "Henk de Steen", "Inge Kerkhoven", "Gert Kruiswijk"];

$names_length = count($klas);
for ($x = 0; $x <$names_length; $x += 1){
    echo $klas[$x] . PHP_EOL;
}
?>