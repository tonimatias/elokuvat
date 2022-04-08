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
            echo '<div class="alert alert-success" role="alert">Movie added!!</div>';
        } catch (Exception $e) {
            echo '<div class="alert alert-danger" role="alert">' . $e->getMessage() . '</div>';
        }
    }
?>

    <form action="add_movie.php" method="post">
        <label for="elokuvanimi">Elokuvan nimi:</label><br>
        <input type="text" name="elokuvanimi" id="elokuvanimi"><br>
        <label for="genreID">Genre ID:</label><br>
        <input type="text" name="genreID" id="genreID"><br>
        <label for="ohjaajaID">Ohjaajan ID:</label><br>
        <input type="text" name="ohjaajaID" id="ohjaajaID"><br>
        <label for="julkaisuvuosi">Julkaisuvuosi:</label><br>
        <input type="text" name="julkaisuvuosi" id="julkaisuvuosi"><br>
        <input type="submit" class="btn btn-primary" value="Add movie">
    </form>

<?php include('../src/templates/foot.php'); ?>