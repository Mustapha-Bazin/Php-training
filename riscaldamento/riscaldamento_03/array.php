<?php


// array

$numeri=[4,10,30];
$tot=0;
for($i=0;$i<count($numeri);$i++){
    $tot+=$numeri[$i];
}

echo "la somma di elementi dell'array vale: ".$tot;

echo "<br>";
//json

$allievo=["nome"=>"Mustapha","cognome"=>"BAZIN"];

echo "il nome de allievo e ".$allievo["nome"]." e il cognome del allievo e ".$allievo["cognome"];

?>