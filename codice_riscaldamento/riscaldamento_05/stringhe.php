<?php

//Scrivre una funzione concatena che ricevendo due stringhe due stringhe ne restituisce una stringa 
// composta dalla concatenazione delle due

function concatena($stringa1,$stringa2){
    return $stringa1.$stringa2;
}

//scrivere une funzione concatena_con_spazio che ricevere due stringhe e restituisce una stringa concatenando con spazio

function concatena_con_spazio($string1,$string2){
    return $stringa1." ".$stringa2;
}

//scrivere une funziona concatena_stringhe che ricevendo un array di stringhe e restituisce una stringa composta dalla concatenazione dei valori dell'array

function concatena_stringhe($array){
    $stringa="";
    for($i=0;$i<count($array);$i++){
        $stringa=$stringa.$array[$i];
    }
    return $string;
}

//scrivere la funzione concatena_stringhe_con_spazio che riceve un array di stringhe e restituisce una stringa composta dalla concatenazioe dei valori dell'array con lo spazio

function concatena_stringh_con_spazio($array){
    $stringa="";
    for($i=0;$i<count($array);$i++){
        $stringa=$stringa.$array[$i]." ";
    }
    return $stringa;
}

// foreach al posto di for
function concatena_stringhe2($array){
    $stringa="";
    foreach($array as $str){
        $string=$string.$str;
    }
    return $stringa;
}
function concatena_stringhe_con_spazio2($array){
    $string="";
    foreach($array as $str){
        $string=$string.$str." ";
    }
    return $string;
}


?>