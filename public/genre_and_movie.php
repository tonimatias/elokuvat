<?php
include('../src/templates/head.php');

require('../db.php');

//Tyylilajit ja elokuvat linkitetty, näyttää jokaisen elokuvan tyylilajin ja nimen:
$sql = "SELECT tyylilaji, elokuva_nimi FROM genre, elokuva WHERE genre.genre_ID = elokuva.genre_ID;";

//Näin saa yhden genren elokuvat erikseen, mutta ei vaikuta hyvältä tavalta:
//$sql = "SELECT tyylilaji, elokuva_nimi FROM genre, elokuva WHERE genre.genre_ID = elokuva.genre_ID AND elokuva.genre_ID = 1;";

$genreMovie = $pdo->query($sql);

echo "<ul>";
foreach ($genreMovie as $g) {
    echo "<li>" . $g["tyylilaji"] . " " . $g["elokuva_nimi"] . "</li>";
}
echo "</ul>";

include('../src/templates/foot.php');