<?php
session_start();

require_once 'fletnix-util.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300|Roboto" rel="stylesheet">
    <title>Homepagina</title>
</head>
    <body>

    <?php require 'header.html'; ?>


    <div class="moviepagina">
        <div class="movieTitle">
            <h2>Sherlock S04E03</h2>
        </div>

        <div class="moviePlayer">
            <video width="320" height="240" autoplay>
                <source src="movie.mp4" type="video/mp4">
                <!--<source src="movie.ogg" type="video/ogg"> back-up video niet in gebruik-->
                Het gebruikte browser ondersteund onze videospeler niet.
            </video>
        </div>

        <div class="movieinfo">
            <p>duur: 90 minuten - filmomschrijving</p>


        </div>
    </div>

    <?php require 'footer.html'; ?>

    </body>
</html>
