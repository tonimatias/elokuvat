<?php

// Get DB connection
require ('../db.php');
// Create SQL query to get all rows from a table
$sql = "SELECT * FROM elokuva";
// Execute the query
$elokuvat = $pdo->query($sql);
// Check if any was returned
if ( $elokuvat->rowCount() > 0 ){
    echo "<ul>";
    // Loop till there are no more rows
    while ( $row = $elokuvat->fetch() ) {
        // Echo the data
        echo "<li>" . $row["elokuva_nimi"] . "</li>";
    }
    echo "</ul>";
} 

include('../src/templates/foot.php');