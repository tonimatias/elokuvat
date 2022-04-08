<?php
require 'db.php';

if(!isset($_POST["elokuva_nimi"]) || !isset($_POST["julkaisuvuosi"])){
    echo "Parametreja puuttui! Ei voida lisätä elokuvaa.";
    exit;
}

$elokuvanimi = $_POST["elokuva_nimi"];
$julkaisuvuosi = $_POST["julkaisuvuosi"];

try{
    $sql = "INSERT INTO elokuva (elokuva_nimi, julkaisuvuosi) VALUES ('$elokuvanimi', '$julkaisuvuosi')";

    $pdo->exec($sql);
    echo $elokuvanimi . " onnistuneesti lisätty!";
}catch(PDOException $e){
    echo "Elokuvaa ei voitu lisätä <br>";
    echo $e->getMessage();
}



