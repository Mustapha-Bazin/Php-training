<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){
    echo $_POST['text'];

}else{
    echo "<form method='post'>
        <input type='textarea' name='text'>
        <br>
        <input type='submit'>
        </form>
    ";
}


?>