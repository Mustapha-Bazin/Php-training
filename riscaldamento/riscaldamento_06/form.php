<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){
    if($_POST["selta"]==="Si"){
        echo "sara una bella giornata";
    }else{
        echo "con un bel riscaldamento tutto cambia";
    }
}else{
    
    echo "<form method='post'>
        Sei felice oggi?? <br>
        <input type='radio' name='selta' value='Si'>Si<br>
        <input type='radio' name='selta' value='No'>No
        <input type='submit' >
        </form>";

}


?>