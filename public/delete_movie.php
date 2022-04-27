<?php
include('../src/templates/head.php');
require('../db.php');

$elokuvanimi = filter_input(INPUT_POST,"elokuvanimi");

function deleteMovie($id){
    require_once '../db.php'; // DB connection
    require '../myconf.php';
    $dsn = "mysql:host=$host;dbname=$database;charset=UTF8";
    
    //Tarkistetaan onko muttujia asetettu
    if( !isset($id) ){
        throw new Exception("Missing parameters! Cannot delete person!");
    }
    
    try{
        $pdo = new PDO($dsn, $user, $password);
        // Start transaction
        $pdo->beginTransaction();
        // Delete from worktime table
        $sql = "DELETE FROM elokuva WHERE elokuva_ID = ?";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(1, $id);        
        $statement->execute();
        // Commit transaction
        $pdo->commit();
    }catch(PDOException $e){
        // Rollback transaction on error
        $pdo->rollBack();
        throw $e;
    }
}

if(isset($id)){
    try{
        deleteMovie($id);
        echo '<div class="alert alert-success" role="alert">Person deleted!!</div>';
    }catch(Exception $e){
        echo '<div class="alert alert-danger" role="alert">'.$e->getMessage().'</div>';
    }
    
}

$id = filter_input(INPUT_GET, "id");
// If id parameter exists -> delete
if(isset($id)){
    try{
        deleteMovie($id);
        echo '<div class="alert alert-success" role="alert">Person deleted!!</div>';
    }catch(Exception $e){
        echo '<div class="alert alert-danger" role="alert">'.$e->getMessage().'</div>';
    }
    
}
// Get all people from database
$sql = "SELECT * FROM elokuva";

$elokuva = $pdo->query($sql);
// Print person list
echo "<ul>";
foreach($elokuva as $e){
    echo "<li>".$e["elokuva_nimi"]." ".'<a href="delete_movie.php?id=' . $e["elokuva_ID"] . '" class="btn btn-primary">Delete</a> </li>';
}
echo "</ul>";