<?php
session_start();
require_once 'fletnix-util.php';
?>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <link rel="stylesheet" type="text/css" href="css/style.css">-->
<!--    <link href="https://fonts.googleapis.com/css?family=Raleway:300|Roboto" rel="stylesheet">-->
<!--    <title>Homepagina</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<?php //require 'header.html'; ?>

<div class="loginpagina">
    <div class="loginform">
        <form method="post">
            <div class="loginformEen">
                <p>Email:</p>
                <input title="email" type="text" name="email" placeholder="email">
                <p>Wachtwoord:</p>
                <input title="password" type="password" name="password" placeholder="password">
            </div>
            <div class="loginformButtom">
                <input type="submit" name="loginKnop" onclick="alert('wachtwoord en username verzonden')">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!verifyWachtwoord($_POST['email'], $_POST['password'])) {
                echo '<div class="waarschuwingPHP"><p> Een of meerdere gegevens kloppen niet .</p ></div>';
            }
        }
        ?>

    </div>
</div>

<?php //require 'footer.html'; ?>
<!---->
<!--</body>-->
<!--</html>-->
