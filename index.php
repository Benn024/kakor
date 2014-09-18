<?php
if (isset($_GET["produkt"])) {

    
    
    $produkt = $_GET["produkt"];
    $kakArray =  unserialize($_COOKIE["lista"]);
    
    $kakStr = serialize($kakArray);
    array_push($kakArray, $produkt);

    setcookie("lista", serialize($kakStr),time()+3600);

    var_dump($minneslista);
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <input type="text" name="produkt">
            <input type="submit" name="submit">

        </form>
    </body>
</html>
