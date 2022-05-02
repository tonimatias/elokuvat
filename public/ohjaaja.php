<?php
include('../src/templates/head.php');
require ('../db.php');

$sql = "SELECT ohjaaja_nimi FROM ohjaaja";

$ohjaaja = $pdo->query($sql);

 if ($ohjaaja->rowCount() > 0){
    echo"<ul>";

    while ($row = $ohjaaja->fetch()){
        echo"<li>" . $row["ohjaaja_nimi"]. " " . "</li>";
    }
    echo"</ul>";
} 

include('../src/templates/foot.php');