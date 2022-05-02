<?php
   require ('../db.php');
   include('../src/templates/head.php');
   include('../src/modules/authorization.php');

    if(isset($_SESSION["username"])){
        logout();
        header("Location: logout.php");
    }else{
        echo '<div class="alert alert-success" role="alert">Logged out!!</div>';
    }

    include('../src/templates/foot.php');
?>

