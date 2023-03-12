<?php

function list_generate($articles){
    echo "<ul>";
    foreach($articles as $frutta){
        echo "<li>".$frutta."</li>";
    }
    echo "</ul>";
}
?>