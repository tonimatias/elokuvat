<?php
include('../src/templates/head.php');

require ('../db.php');

$sql = "SELECT * FROM elokuva";

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
        echo"<div class='card'>" .
        "<div class='card-header'>" .$row["elokuva_nimi"]. "</div>".
        "<div class='card-main'>".
        "<div class='main-description'>". $row["julkaisuvuosi"]."</div>".
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