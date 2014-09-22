<?php
//skapa arrayt att lagra listan i i minnet
$kakArray = array();


// uppdatera kaka
if (isset($_GET["produkt"])) {




    //läsa formuläret
    $produkt = $_GET["produkt"];

    //kolla om kakan finns redan, om inte skapa den
    if (isset($_COOKIE["lista"])) {
        $kakArray = unserialize($_COOKIE["lista"]);
    } else {
//        setcookie("lista",0,time()+3600);
    }


    //lägga till formulärdata längst bak
    array_push($kakArray, $produkt);

    // gör om array t sträng för att lagra i kaka
    $kakStr = serialize($kakArray);

    //lagra kaka
    setcookie("lista", $kakStr, time() + 3600);

   

//       var_dump($_COOKIE);
}

//rensa kaka
if (isset($_GET["rensa"])) {
    setcookie("lista", 0, time() - 3600);
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
            <input type="submit">
        </form>
        <a href="index.php?rensa=ja">rensa</a> | <a href="index.php">nollställ</a>

        <table>
            <tr>

                
            <?php 
             foreach ($kakArray as $temp) {
                 echo "<td>" . $temp . "</td>";
             }
            
            ?>
             

            </tr>

        </table>


    </body>
</html>
