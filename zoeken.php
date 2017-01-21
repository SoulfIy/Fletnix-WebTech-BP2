<?php
session_start()


?>

<?php require 'fletnix-util.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300|Roboto" rel="stylesheet">
    <title>Abonnementskeuze</title>
</head>
<body>

<?php require 'header.html'; ?>

<div class="zoeken">

    <div class="zoekform">

        <form title="zoekform" name="zoekform" action="zoeken.php" method="post">

                <p>Titel:</p>
                <input title="titel" type="text" name="titel" placeholder="titel"><br>

                <p>Genre:</p>
                <input title="genre" type="text" name="genre" placeholder="genre"><br>

                <p>Release datum:</p>
                <input title="releasedatum" type="text" name="releasedatum" placeholder="releasedatum"><br>

                <p>Acteur:</p>
                <input title="acteur" type="text" name="acteur" placeholder="acteur"><br>

                <p>Reggiseur:</p>
                <input title="reggiseur" type="text" name="reggiseur" placeholder="reggiseur"><br>

            <div class="contactformbutton">

                <input type="submit" onclick="alert('bericht verzonden')" value="Zoeken">

            </div>

        </form>

    </div>

<?php require 'footer.html'; ?>

</body>
</html>
