<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Not IMDB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/elokuvat/public">Etusivu</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/elokuvat/public/elokuvat.php">Elokuvat</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/elokuvat/public/genre.php">Genre</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/elokuvat/public/ohjaaja.php">Ohjaaja</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/elokuvat/public/genre_and_movie.php">Elokuvat tyylilajeittain</a>
            </li>
          <!--   <li class="nav-item">
            <a class="nav-link" href="http://localhost/elokuvat/public/add_movie.php">Elokuvien lisääminen</a>
            </li> -->
           
            <?php 
                if(isset($_SESSION["username"])){
                    echo '<a class="nav-link" href="http://localhost/elokuvat/public/add_movie.php">Lisää elokuva</a>';
                    echo '<a class="nav-link" href="http://localhost/elokuvat/public/delete_movie.php">Poista elokuva</a>';
                    echo '<a class="nav-link bg-danger" href="logout.php">Kirjaudu ulos</a>';
                }else{
                    echo '<a class="nav-link" href="person.php">Rekisteröidy</a>';
                    echo '<a class="nav-link bg-success" href="login.php">Kirjaudu sisään</a>';
                }
            ?>
        </ul>
        </div>
    </div>
    </nav>