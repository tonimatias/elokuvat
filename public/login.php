<?php
include('../src/templates/head.php');
include('../src/modules/authorization.php');
require ('../db.php');



$uname = filter_input(INPUT_POST, "username");
$pw = filter_input(INPUT_POST, "password");

if(!isset($_SESSION["username"]) && isset($uname)){

    try {
        login($uname, $pw);
        header("Location: index.php");
        exit;
    } catch (Exception $e) {
        echo '<div class="alert alert-danger" role="alert">'.$e->getMessage().'</div>';
    }
   
}

    if(!isset($_SESSION["usename"])){
?>

    <form action="login.php" method="post">
        <label for="username">Käyttäjätunnus:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Salasana:</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" class="btn btn-primary" value="Log in">
    </form>


<?php } include('../src/templates/foot.php'); ?>