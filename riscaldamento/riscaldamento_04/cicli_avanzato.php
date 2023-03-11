<?php


// ho scrito questo codice solo per ricordare la sintassi

$user =["name"=>"John","surname"=>"Doe","age"=>"35","salary"=>"35000"];

echo $user['name'];


//utilizzando un ciclo per stampare tutti campi dell'array

foreach($user as $key=>$value){
    echo "il ".$key." e ".$value."<br>";
}

echo "<hr>";

// questa volta devo stampar gli stessi dati in una tabella

echo "<table border='2'>";
foreach($user as $key=>$value){
    echo "<tr> 
        <td>$key</td>
        <td>$value</td></tr>";

}
echo "</table>";
echo "<hr>";

$users=[["name"=>"John","surname"=>"Doe","age"=>"35","salary"=>"35000"],["name"=>"Mary","surname"=>"Doe","age"=>"21","salary"=>"12000"],["name"=>"Antony","surname"=>"Smith","age"=>"34","salary"=>"21000"],["name"=>"Frank","surname"=>"Marshall","age"=>"56","salary"=>"34000"]];

echo "<table border ='1'>";
echo "<tr>";
foreach($users[0] as $key=>$value){
    echo "<td> <b>$key</b></td>";
}
echo "</tr>";
foreach($users as $user){
    echo "<tr>";
    foreach($user as $key=>$value){
        echo "<td> $value</td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "<hr>";




?>