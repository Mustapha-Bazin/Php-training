<?php
// stampare Hello world...
echo "Hello world! Questa e  la lezione 3";
echo "<hr>";

//dichiarazione e inizializzazione di due variabili
$a =5;
$b= 10;

echo "la variabile a vale:". $a." la variabile b vale:".$b;
echo "<hr>";

//le operazioni aritmetiche 
$s=$a+$b;
$d=$a-$b;
$p=$a*$b;
$di=$a/$b;
$m=$a%$b;

echo "la somma di $a e $b vale: ".$s."<br>la differnza tra $a e $b vale: ".$d."<br>la divisione di $a e $b vale: ".$di."<br> la multiplicatione di $a e $b vale: ".$p."<br> il modulo di $a e $b vale:".$m;
echo "<hr>";

// la funzione date()

echo date("d/m/20y")."<br>";
echo date("20y-m-d")."<br>";
echo date("h:i:s");

echo "<hr>";

// Concatenazione

$town ="Torino";
$region= "Pienonte";

echo $town." e il capoliogo della regione ".$region;
echo "<hr>";

//

define("IVA",22);

$costo = 40;

$costo_ivato= $costo*IVA/100 +$costo;

echo "il prodotto costa ".$costo." euro +IVA ".IVA."% per un totale di ".$costo_ivato;




?>