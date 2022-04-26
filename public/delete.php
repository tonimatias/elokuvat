<?php
require_once ('../db.php');

if(isset($_GET['elokuva_ID'])){
    $id = $_GET['elokuva_ID'];
    $sql = "DELETE FROM elokuva WHERE elokuva_ID = $id";

    if($pdo->query($sql) === TRUE){
        echo "Delete the data";
    }else{
        echo "something went wrong";
    }
    
}else{
    // redirect to show with error
    die('id not provided');
}
?>