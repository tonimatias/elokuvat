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
    $genreID = filter_input(INPUT_POST, "genreID", FILTER_SANITIZE_NUMBER_INT);

    if (isset($elokuvanimi)) {
        try {
            addMovie($elokuvanimi, $genre, $ohjaaja, $julkaisuvuosi);
            echo '<div class="alert alert-success" role="alert">Movie added!!</div>';
        } catch (Exception $e) {
            echo '<div class="alert alert-danger" role="alert">' . $e->getMessage() . '</div>';
        }
    }

    $selectedId = isset($genreID) ? $genreID : 0;

    function createGenreDropdown($selectedId = -1){
        require ('../db.php');
    
        $sql = "SELECT * FROM genre";

        $genres = $pdo->query($sql);
    
        echo '<select name="genreID" id="genreID">';
            // Loop till there are no more rows
        foreach($genres as $g){
            echo '<option value="'
                . $p["genreID"] .'"'
                .($p["genre_ID"] == $selectedId ? ' selected' : ''). '>' 
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
        <label for="genreID">Genre ID: <p> 1 = Komedia | 2 = Kauhu |  3 = Toiminta |  4 = Draama  | 5 = Fantasia |  6 = Animaatio |  7 = Romantiikka  | 8 = Supersankari |  9 = Sci-fi</p></label><br>
        
     <!--    <?php 
       createGenreDropdown($selectedId);
      
       ?> -->
        <input type="text" name="genreID" id="genreID" placeholder="ei vittu"> <br>
        
        <label for="ohjaajaID">Ohjaajan ID:</label><br>
        <?php
        ohjaajaDropDown($selectedID);
        ?>
        <!-- <input type="text" name="ohjaajaID" id="ohjaajaID"><br> -->
        <label for="julkaisuvuosi">Julkaisuvuosi:</label><br>
        <input type="text" name="julkaisuvuosi" id="julkaisuvuosi"><br>
        <input type="submit" class="btn btn-primary" value="Add movie">
    </form>

<?php include('../src/templates/foot.php'); ?>