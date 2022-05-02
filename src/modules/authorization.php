<?php
function login($uname, $pw){

    require ('../db.php');


    //Tarkistetaan onko muttujia asetettu
    if( !isset($uname) || !isset($pw) ){
        throw new Exception("Puuttuvat parametrit. Ei voida kirjautua sisään.");
    }

    //Tarkistetaan, ettei tyhjiä arvoja muuttujissa
    if( empty($uname) || empty($pw) ){
        throw new Exception("Ei voida kirjautua sisään tyhjillä arvoilla.");
    }

    try{
        
        //Haetaan käyttäjä annetulla käyttäjänimellä
        $sql = "SELECT username, password, firstname, lastname FROM henkilö WHERE username=?";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $uname);
        $statement->execute();

        if($statement->rowCount() <=0){
            throw new Exception("Käyttäjää ei löytynyt! Ei voida kirjautua sisään!");
        }

        $row = $statement->fetch();

        //Tarkistetaan käyttäjän antama salasana tietokannan salasanaa vasten
        if(!password_verify($pw, $row["password"] )){
            throw new Exception("Väärä salasana!!");
        }

        //Jos käyttäjä tunnistettu, talletetaan käyttäjän tiedot sessioon
        $_SESSION["username"] = $uname;
        $_SESSION["fname"] = $row["firstname"];
        $_SESSION["lname"] = $row["lastname"];

    }catch(PDOException $e){
        throw $e;
    }

}

function logout(){
    //Tyhjennetään ja tuhotaan nykyinen sessio.
    try{
        session_unset();
        session_destroy();
    }catch(Exception $e){
        throw $e;
    }
}

?>