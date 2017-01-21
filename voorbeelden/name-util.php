<?php
/**
 * Created by PhpStorm.
 * User: meron
 * Date: 19/12/2016
 * Time: 11:14
 */
require_once "db-util.php";

connectToDatabase();

/**
 * Create name entries for tables.
 */
function createNameEntries()
{
    $namen = createNameArray();

    foreach ($namen as $afkorting => $naam) {
        printTableRow($afkorting, $naam);
    }
}

/**
 * @return array Contains a list of names.
 */
function createNameArray(): array
{
    $names = getNames();
    return $names;
}

/**
 * @param $afkorting    Afkorting behorende bij naam.
 * @param $naam         Naam is een Array, bestaande uit een voornaam en achternaam.
 */
function printTableRow(string $afkorting, array $naam)
{
    echo "<tr ><td>$afkorting</td><td>" . $naam[0] . "</td ><td >" . $naam[1] . "</td ></tr >";
}

function processForm()
{
    if (array_key_exists("verwijder", $_POST)) {
        if (array_key_exists($_POST["verwijder"], createNameArray())) {
            deleteName($_POST["verwijder"]);

        } else {
            echo "De ingevulde afkorting is niet in gebruik!";
        }
        createNameEntries();


    } else if (isValidForm()) {

        $afkorting = $_POST["afkorting"];
        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];

        addName($afkorting, $voornaam, $achternaam);

        createNameEntries();
    }
}

function isValidForm()
{
    $afkorting = $_POST["afkorting"];
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];

    if (strlen($afkorting) == 0 || strlen($voornaam) == 0 || strlen($achternaam) == 0) {
        echo "Er is een waarde niet ingevuld!";
        return false;
    } else if (array_key_exists($afkorting, createNameArray())) {
        echo "De ingevulde afkorting is al in gebruik!";
        return false;
    } else {
        return true;
    }
}