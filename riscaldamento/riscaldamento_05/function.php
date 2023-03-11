<?php

function list1($array,$type=0){
    if($type==0){
        $html="ul";
    }elseif($type==1){
        $html="ol";
        sort($array,SORT_STRING);
    }
    echo "<".$html.">";
    foreach($array as $ar){
        echo "<li>$ar</li>";
    }
    echo "</".$html.">";
}

?>