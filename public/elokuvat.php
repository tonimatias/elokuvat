<?php
include('../src/templates/head.php');
require ('../db.php');

$sql = "SELECT elokuva_nimi, julkaisuvuosi, ohjaaja_nimi, tyylilaji 
FROM elokuva, ohjaaja, genre
WHERE elokuva.ohjaaja_ID = ohjaaja.ohjaaja_ID AND elokuva.genre_ID = genre.genre_ID
ORDER BY elokuva_nimi";

$leffat = $pdo->query($sql);

/* if ($leffat->rowCount() > 0){
    echo"<ul>";

    while ($row = $leffat->fetch()){
        echo"<li>" . $row["elokuva_nimi"]. " " . $row["julkaisuvuosi"]. "</li>";
    }
    echo"</ul>";
} */


/* https://codeburst.io/build-a-minimalist-html-card-in-just-53-lines-of-code-with-flexbox-b40801927eb5 */

if ($leffat->rowCount() > 0){

    while ($row = $leffat->fetch()){
        echo
        "<div class='card'>" .
        "<div class='card-header'>" .$row["elokuva_nimi"]. "</div>".
        "<div class='card-main'>".
        "<div class='main-description'>". "Julkaisuvuosi: ". $row["julkaisuvuosi"]. '<br>' . " Ohjaaja: " . $row["ohjaaja_nimi"]. '<br>' ." Tyylilaji: ". $row["tyylilaji"] . "</div>".
        "<div class='btn-group'>".
        "<a class='btn btn-secondary' href='./update.php?id=" .$row['elokuva_ID'] ."'> Muokkaa </a>".
        "<a class='btn btn-danger' href='./delete.php?id=" .$row['elokuva_ID'] ."'> Poista</a>".
        "</div>".
        "</div>".
         "</div>";
    }

}

include('../src/templates/foot.php');
/* <div class="card">
  <div class="card-header">Night</div>
  <div class="card-main">
    <i class="material-icons">hot_tub</i>
    <div class="main-description">Hot Tub</div>
  </div>
</div> */