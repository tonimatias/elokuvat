<?php
    include('../src/templates/head.php');
    ?>
    <div>
     <?php 
    if(isset($_SESSION["username"])){
        echo "<h1>Tervetuloa ".$_SESSION["fname"]." ".$_SESSION["lname"]."! Miten menee? :)</h1>";
    }else{
        echo "<h1>Tervetuloa! Ylhäältä voit selata mieluisia elokuvia ja kirjautumalla sisään voit itsekkin lisätä!</h1>";
    }
     ?> <br>
    </div>
    <?php
    include('../src/templates/foot.php');