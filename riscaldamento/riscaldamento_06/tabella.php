<?php


if($_SERVER['REQUEST_METHOD']==="POST"){
    $frutti=$_POST;
    echo "<ul>";
    foreach($frutti as $a){
        echo "<li>".$a."</li>";
    }
    echo "</ul>";

}else{
echo "
<h1>i frutti</h1>
<form method='post'>
<input type='text' name='s'><br>
<input type='text' name='s1'><br>
<input type='text' name='s2'><br>
<input type='text' name='s3'><br>
<input type='submit'>
</form>
";
}

?>