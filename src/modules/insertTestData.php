<?php

require ('../../db.php');

$sql = "INSERT INTO genre (tyylilaji) VALUES ('testigenre')";

$numberOfInserted = $pdo->exec($sql);

echo"Inserted ". $numberOfInserted . " rows.";