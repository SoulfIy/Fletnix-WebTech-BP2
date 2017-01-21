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

<div class="content">

    <div class="deeleen">

        <h1>Welkom bij Fletnix</h1>

        <div class="kenmerken">
            <p><img class="check" src="css/images/check-mark.png" alt="check-mark">onwijs groot aanbod aan films en series</p><br>
            <p><img class="check" src="css/images/check-mark.png" alt="check-mark">Elke week nieuwe films en series</p><br>
            <p><img class="check" src="css/images/check-mark.png" alt="check-mark">altijd opzegbaar</p><br>
            <p><img class="check" src="css/images/check-mark.png" alt="check-mark">altijd opzegbaar</p>
        </div>

        <div class="button">
            <button type="button" class="mainbuttondeco" onclick="location.href='abonnementskeuze.php'">Abonneer nu</button>
        </div>

    </div>

    <div class="deeltwee">

        <h2>Populaire films en series</h2>

            <img class="movieposter" src="css/images/matrixPoster.jpg" alt="movieposter">
            <img class="movieposter" src="css/images/exorcistPoster.jpeg" alt="movieposter">
            <img class="movieposter" src="css/images/groundhogdayPoster.jpg" alt="movieposter">
            <img class="movieposter" src="css/images/spongebobmoviePoster.jpg" alt="movieposter">
            <img class="movieposter" src="css/images/zohanPoster.jpg" alt="movieposter">

        <h2>Nieuwe films en series</h2>

            <img class="movieposter" src="css/images/zohanPoster.jpg" alt="movieposter">
            <img class="movieposter" src="css/images/matrixPoster.jpg" alt="movieposter">
            <img class="movieposter" src="css/images/spongebobmoviePoster.jpg" alt="movieposter">
            <img class="movieposter" src="css/images/exorcistPoster.jpeg" alt="movieposter">
            <img class="movieposter" src="css/images/groundhogdayPoster.jpg" alt="movieposter">

    </div>


</div>

<?php require 'footer.html'; ?>

</body>
</html>
