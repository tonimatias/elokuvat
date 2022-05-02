<?php
include('../src/templates/head.php');
include('../addperson.php');
require ('../db.php');

    //Filtteroidaan POST-inputit (ei käytetä string-filtteriä, koska deprekoitunut)
    //Jos parametria ei löydy, funktio palauttaa null
    $fname = filter_input(INPUT_POST, "fname");
    $lname = filter_input(INPUT_POST, "lname");
    $uname = filter_input(INPUT_POST, "username");
    $pw = filter_input(INPUT_POST, "password");

    if(isset($fname)){
        try{
            addPerson($fname, $lname, $uname, $pw);
            echo '<div class="alert alert-success" role="alert">Henkilö lisätty!!</div>';
        }catch(Exception $e){
            echo '<div class="alert alert-danger" role="alert">'.$e->getMessage().'</div>';
        }
        
    }

?>

    <form action="person.php" method="post">
        <label for="fname">Etunimi:</label><br>
        <input type="text" name="fname" id="fname"><br>
        <label for="lname">Sukunimi:</label><br>
        <input type="text" name="lname" id="lname"><br>
        <label for="username">Käyttäjätunnus:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Salasana:</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" class="btn btn-primary" value="Add person">
    </form>

<?php  include('../src/templates/foot.php'); ?>