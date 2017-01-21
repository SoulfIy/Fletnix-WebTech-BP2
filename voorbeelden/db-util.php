<?php

function connectToDatabase() {
    global $pdo;

    $pdo = new PDO ('pgsql:host=localhost;port=5432;dbname=postgres;user=postgres;password=postgres');
}

function getNames(){
    global $pdo;
    $names = array();

    $data = $pdo->query("SELECT * FROM names");
    while ($row = $data->fetch()){
        $names[$row["afkorting"]]= array($row["voornaam"], $row["achternaam"]);
    }

    return $names;
}

function addName($afkorting, $voornaam,$achternaam) {
    global $pdo;
    try {
        $stmt = $pdo->prepare("INSERT INTO names (afkorting, voornaam, achternaam) VALUES (?,?,?)");
        $stmt->execute(array($afkorting,$voornaam, $achternaam));
    } catch (PDOException $e) {
        echo "Could not insert name, ".$e->getMessage();
    }
}

function deleteName($afkorting){
    global $pdo;
    try {
        $stmt = $pdo->prepare('DELETE from names where afkorting=:afkorting');
        $stmt->execute(array(':afkorting' => $afkorting));
    } catch (PDOException $e) {
        echo "Could not delete name, ".$e->getMessage();
    }

}