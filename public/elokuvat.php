<?php
include('../src/templates/head.php');
require ('../db.php');

$sql = "SELECT elokuva_ID, elokuva_nimi, julkaisuvuosi, ohjaaja_nimi, tyylilaji 
FROM elokuva, ohjaaja, genre
WHERE elokuva.ohjaaja_ID = ohjaaja.ohjaaja_ID AND elokuva.genre_ID = genre.genre_ID
ORDER BY elokuva_nimi";

$leffat = $pdo->query($sql);

if ($leffat->rowCount() > 0){

    while ($row = $leffat->fetch()){
        echo
        "<div class='card'>" .
        "<div class='card-header'>" .$row["elokuva_nimi"]. "</div>".
        "<div class='card-main'>".
        "<div class='main-description'>". "Julkaisuvuosi: ". $row["julkaisuvuosi"]. '<br>' . " Ohjaaja: " . $row["ohjaaja_nimi"]. '<br>' ." Tyylilaji: ". $row["tyylilaji"] . "</div>".
        "</div>".
         "</div>";
    }

}

include('../src/templates/foot.php');