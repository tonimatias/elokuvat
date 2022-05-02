<?php
include('../src/templates/head.php');
include ('../add_movie_function.php');
require ('../db.php');

    //Filtteroidaan POST-inputit (ei käytetä string-filtteriä, koska deprekoitunut)
    //Jos parametria ei löydy, funktio palauttaa null

    $elokuvanimi = filter_input(INPUT_POST,"elokuvanimi");
    $genre = filter_input(INPUT_POST,"genreID");
    $ohjaaja = filter_input(INPUT_POST,"ohjaajaID");
    $julkaisuvuosi = filter_input(INPUT_POST,"julkaisuvuosi");

    if (isset($elokuvanimi)) {
        try {
            addMovie($elokuvanimi, $genre, $ohjaaja, $julkaisuvuosi);
            echo '<div class="alert alert-success" role="alert">Elokuva lisätty</div>';
        } catch (Exception $e) {
            echo '<div class="alert alert-danger" role="alert">' . $e->getMessage() . '</div>';
        }
    }

    $selectedId = isset($genre) ? $genre : 0;

    function createGenreDropdown($selectedId = -1){
        require ('../db.php');
    
        $sql = "SELECT x.genre_ID, x.tyylilaji 
        FROM genre x, genre y 
        WHERE x.genre_ID = y.genre_ID ORDER By genre_ID";

        $genres = $pdo->query($sql);
    
        echo '<select name="genreID" id="genreID">';
            // Loop till there are no more rows
        foreach($genres as $g){
            echo '<option value="'
                . $g["genre_ID"] .'"'
                .($g["genre_ID"] == $selectedId ? ' selected' : ''). '>' 
                . $g["genre_ID"]
                . $g["tyylilaji"]
                .'</option>';
        }
        echo "</select><br/>";
    }

    $selectedID = isset($ohjaaja) ? $ohjaaja : 0;

    function ohjaajaDropDown(){
        require ('../db.php');

        $sql = "SELECT x.ohjaaja_ID, x.ohjaaja_nimi 
        FROM ohjaaja x, ohjaaja y 
        WHERE x.ohjaaja_ID = y.ohjaaja_ID ORDER By ohjaaja_ID;";

        $ohjaajat = $pdo->query($sql);

        echo '<select name="ohjaajaID" id="ohjaajaID">';
            // Loop till there are no more rows
        foreach($ohjaajat as $o){
            echo '<option value="'
                . $o["ohjaaja_ID"] .'"'
                .($o["ohjaaja_ID"] == $selectedID ? ' selected' : ''). '>' 
                . $o["ohjaaja_ID"]
                . $o["ohjaaja_nimi"]
                .'</option>';
        }
        echo "</select><br/>";
    }
?>

    <form action="add_movie.php" method="post">
        <label for="elokuvanimi">Elokuvan nimi:</label><br>
        <input type="text" name="elokuvanimi" id="elokuvanimi"><br>
        <label for="genreID">Genre ID: </label><br>
        <?php 
       createGenreDropdown($selectedId);
      
       ?>
        <label for="ohjaajaID">Ohjaajan ID:</label><br>
        <?php
        ohjaajaDropDown($selectedID);
        ?>
        <label for="julkaisuvuosi">Julkaisuvuosi:</label><br>
        <input type="text" name="julkaisuvuosi" id="julkaisuvuosi"><br>
        <input type="submit" class="btn btn-primary" value="Add movie">
    </form>

<?php include('../src/templates/foot.php'); ?>