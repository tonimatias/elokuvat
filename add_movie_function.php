<?php

function addMovie($elokuvanimi, $genre, $ohjaaja, $julkaisuvuosi) {
    require('../db.php');

    //Tarkistetaan onko muttujia asetettu
    if (!isset($elokuvanimi) || !isset($genre) || !isset($ohjaaja) || !isset($julkaisuvuosi)) {
        throw new Exception("Parametrejä puuttui! ei voida lisätä elokuvaa.");
    }

    //Tarkistetaan, ettei tyhjiä arvoja muuttujissa
    if (empty($elokuvanimi) || empty($genre) || empty($ohjaaja) || empty($julkaisuvuosi)) {
        throw new Exception("Ei voida asettaa tyhjiä arvoja!");
    }
   
    try{
        require('../db.php');

        //Suoritetaan parametrien lisääminen tietokantaan.
        $sql = "INSERT INTO elokuva (elokuva_nimi, genre_ID, ohjaaja_ID, julkaisuvuosi) VALUES (?, ?, ?, ?)";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $elokuvanimi);
        $statement->bindParam(2, $genre);
        $statement->bindParam(3, $ohjaaja);
        $statement->bindParam(4, $julkaisuvuosi);
    
        $statement->execute();
    
        echo "Elokuvan '".$elokuvanimi."' tiedot on lisätty tietokantaan."; 
    }catch(PDOException $e){
        throw $e;
    }
}
