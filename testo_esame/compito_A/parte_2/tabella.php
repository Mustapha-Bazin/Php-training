<?php
require ("dati.php");
require ("intestazione.php");


if($_SERVER['REQUEST_METHOD']==='POST'){
    echo "
<table border='1'>
<tr>
<td>Ora</td>
<td>Numero di carriole</td>
<td>Numero di carri</td>
<td>Numero di camion</td>
<td>Kg complessivi trasportati</td>
</tr>";
foreach($trasporti as $ora=>$trasporto){
    if($ora>=$_POST['inizio']&&$ora<=$_POST['fine']){
    echo "<tr><td>".$ora."</td>";
    $complessivi=0;
    foreach($trasporto as $mezzo=>$viaggio){
        if($mezzo=='CLA'){
            $complessivi+=$viaggio*100;
        }elseif($mezzo=='CRO'){
            $complessivi+=$viaggio*500;
        }elseif($mezzo=='CMI'){
            $complessivi+=$viaggio*4000;
        }

        echo "<td>".$viaggio."</td>";
    }
    echo "<td>".$complessivi."</td></tr>";
}}
echo "</table>";

}else{
echo "<form method='post' >
    <input type='text' name='inizio' placholder='ora inizio'>
    <input type='text' name='fine' placholder='ora fine'>
    <input type='submit'>
    </form>
";
echo "
<table border='1'>
<tr>
<td>Ora</td>
<td>Numero di carriole</td>
<td>Numero di carri</td>
<td>Numero di camion</td>
<td>Kg complessivi trasportati</td>
</tr>";
foreach($trasporti as $ora=>$trasporto){
    echo "<tr><td>".$ora."</td>";
    $complessivi=0;
    foreach($trasporto as $mezzo=>$viaggio){
        if($mezzo=='CLA'){
            $complessivi+=$viaggio*100;
        }elseif($mezzo=='CRO'){
            $complessivi+=$viaggio*500;
        }elseif($mezzo=='CMI'){
            $complessivi+=$viaggio*4000;
        }

        echo "<td>".$viaggio."</td>";
    }
    echo "<td>".$complessivi."</td></tr>";
}
echo "</table>";}


?>