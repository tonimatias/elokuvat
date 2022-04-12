<?php
include('../src/templates/head.php');
require ('../db.php');

$sql = "SELECT elokuva_nimi, julkaisuvuosi, ohjaaja_nimi, tyylilaji 
FROM elokuva, ohjaaja, genre
WHERE elokuva.ohjaaja_ID = ohjaaja.ohjaaja_ID AND elokuva.genre_ID = genre.genre_ID";

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
        echo"<div class='container' style='width: 20vw;                 
        border: 1px solid #EF9A9A;   
        border-radius: 4px;           
        overflow: hidden;            
        display: flex;              
        flex-direction: column;
        margin: 10px;'>" .
        "<div class='row row-cols-2' style='color: #D32F2F;
        text-align: center;
        font-size: 12px;
        font-weight: 600;
        border-bottom: 1px solid #EF9A9A;
        background-color: #FFEBEE;
        padding: 5px 10px;'>" .$row["elokuva_nimi"]. "</div>".
        "<div class='card-main' style=' display: flex;              
        flex-direction: column;     
               
        padding: 5px 0; '>".
        "<div class='main-description'>". "Julkaisuvuosi: ". $row["julkaisuvuosi"]. '<br>' . " Ohjaaja: " . $row["ohjaaja_nimi"]. '<br>' ." Tyylilaji: ". $row["tyylilaji"] . "</div>".
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