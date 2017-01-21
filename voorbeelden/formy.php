<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FormyMcFormFace</title>
    <link rel="stylesheet" href="CSS/stijl.css">
</head>
<body>
<?php
require "name-util.php";

error_reporting(E_ALL);
ini_set('display_errors', 'On');
echo '<pre>';
print_r(PDO::getAvailableDrivers());
echo '</pre>';
?>
<h1>Forms enzo...</h1>

<form method="post" action="formy.php">
    Afkorting: <input type="text" name="afkorting" maxlength="3"><br>
    Voornaam: <input type="text" name="voornaam"><br>
    Achternaam: <input type="text" name="achternaam"><br>
    <input type="submit">
</form>
<table>
    <tr>
        <th>afkorting</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
    </tr>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        processForm();
    } else {
        createNameEntries();
    }
    ?>
</table>
<form method="post" action="formy.php">
    Verwijder gebruiker met afkorting: <input type="text" name="verwijder" maxlength="3">
    <input type="submit">
</form>

</body>
</html>

