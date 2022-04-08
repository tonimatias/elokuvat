<?php
include('../src/templates/head.php');

require ('../db.php');

$sql = "SELECT tyylilaji FROM genre";

$genre = $pdo->query($sql);

 if ($genre->rowCount() > 0){
    echo"<ul>";

    while ($row = $genre->fetch()){
        echo"<li>" . $row["tyylilaji"]. " " . "</li>";
    }
    echo"</ul>";
} 

include('../src/templates/foot.php');