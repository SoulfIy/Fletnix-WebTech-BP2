<?php
if (isset($_SESSION['gebruiker'])) {
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

<?php require 'filmaanbodData.php'?>

<?php require 'footer.html'; ?>

</body>
</html>session_start();
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

<?php require 'filmaanbodData.php'?>

<?php require 'footer.html'; ?>

</body>
</html>
<?php
} else {
require 'loginscherm.php';
}
?>
