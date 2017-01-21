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


<br><br><br><br><br>


<div class="registratieform">

    <form name="registratieform" id="registratieform" method="post">
        <input title="registername" type="text" name="registername" placeholder="name">
        <input title="registeremail" type="email" name="registeremail" placeholder="email">
        <input title="geboortedatum" type="date" name="geboortedatum" placeholder="geboortedatum">
        <input title="registerpassword" type="password" name="registerpassword" placeholder="password">
        <input title="paypal_account" type="text" name="paypal_account" placeholder="paypal_account">

        <select name="country_name" form="registratieform">
            <?php
            $landenlijst[] = getLandenDB();

            for ($i = 0; $i < count($landenlijst[0]); $i++) {
                echo '<option value="'.$landenlijst[0][$i].'">'.$landenlijst[0][$i].'</option>';
            }
            ?>
        </select>

        <input type="submit" name="register" onclick="alert('wachtwoord en username verzonden')">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        debug($_POST);
        $startdatum = date("Y-m-d");

            if (registerToDB($_POST[("registeremail")], $_POST[("registername")], $_POST[("paypal_account")], $startdatum, $_POST[("registerpassword")], $_POST[("country_name")])) {
                echo 'registratie succesvol'.'<br>';
            } else {
                echo 'registratie niet succesvol'.'<br>';
            }
        }

    ?>

</div>

<?php require 'footer.html'; ?>

</body>
</html>