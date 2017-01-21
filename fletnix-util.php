<?php
connectToDatabase();

$_SESSION['gebruiker'] = NULL;

function connectToDatabase() {
    try {
        global $pdo;
        $pdo = new PDO("sqlsrv:Server=localhost;Database=CASUS_FLETNIX;ConnectionPooling=0", "sa", "password123");
    } catch (PDOException $e) {
        echo "Could not insert Information, " . $e->getMessage();
    }

// $pdo = new PDO("sqlsrv:Server=localhost;Database=CASUS_FLETNIX", "sa", "password123");
}

function debug($value){
    echo '<pre>';
    var_dump($value);
    echo '<pre>';

}

/* Inloggen PHP Code - - - - - - - - - - - - - - */

function checkGegevensDB($email) {
    global $pdo;

    $data = $pdo->prepare("SELECT customer_mail_address, password FROM customer WHERE customer_mail_address = ?");
    $data->execute(array("$email"));
    while ($row = $data->fetch()) {
        $gegevens[$row['customer_mail_address']] = array($row['password']);
    }

    if (!empty ($gegevens)) {
        return $gegevens;
    } else {
        return 'foutieve gegevens ingevoerd';
    }
}

function verifyWachtwoord($email, $password) {
    global $pdo;

    $ingevoerdeEmail = $email;
    $ingevoerdeWachtwoord = array($password);

    $dataDB = checkGegevensDB($ingevoerdeEmail);


//    print_r($dataDB[$ingevoerdeEmail]);
//    print_r($ingevoerdeWachtwoord);

    if ($dataDB[$ingevoerdeEmail] == $ingevoerdeWachtwoord) {
        $_SESSION['gebruiker'] = $ingevoerdeEmail;
        echo 'succesful';
        return true;
    } else {
        $_SESSION['gebruiker'] = NULL;
        echo 'not at all succesful - ';
        print_r ($dataDB[$ingevoerdeEmail]);
        return false;
    }
}

function redirect($DoDie = true) {
    header('Location: contact.php');
    if ($DoDie)
        die();
}

/* Filmaanbod PHP Code - - - - - - - - - - - - - - */

function watIsNaam($email) {
    global $pdo;

    $data = $pdo->prepare("SELECT customer_mail_address, name FROM customer WHERE customer_mail_address = ?");
    $data->execute(array("$email"));
    while ($row = $data->fetch()) {
        $naam[$row['customer_mail_address']] = array($row['naam']);
    }

    if (!empty ($naam)) {
        return $naam;
    } else {
        return 'Gebruiker';
    }
}

/* Registreren PHP Code - - - - - - - - - - - - - - */

function checkEmailDB($email) {
    global $pdo;

    $data = $pdo->prepare("SELECT customer_mail_address FROM customer WHERE customer_mail_address = ?");
    $data->execute(array("$email"));
    while ($row = $data->fetch()) {
        $gegevens = array([$row['customer_mail_address']]);
    }

    if (!empty ($gegevens)) {
        return true;
    } else {
        return false;
    }
}

function registerToDB($customer_mail_address, $name, $paypal_account, $datum, $password, $country_name ) {
    global $pdo;

    if (!checkEmailDB($customer_mail_address)) {
        try {//$startdatum = date("Y-m-d");
            $einddatum = NULL;
            $data = $pdo->prepare(" INSERT INTO Customer(customer_mail_address, name, paypal_account, subscription_start, subscription_end, password, country_name)
                                            values(?,?,?,?,?,?,?) ");
            $data->execute(array($customer_mail_address, $name, $paypal_account, $datum, $einddatum, $password, $country_name));

        } catch (PDOException $e) {
            echo "Could not insert information, ".$e->getMessage();
            return false;
        }
        if (checkEmailDB($customer_mail_address)) {
            echo 'Nieuwe email toegevoegd!'.'<br>';
            return true;
        } else {
            return false;
        }
    }
}

function registerAlBestaandAccount() {
    if (checkEmailDB($_POST['registeremail']) == false) {
        /* account bestaat nog niet, ga verder */
       // registerToDB();
    } else {
        /* account bestaat al. stop. */
    }
}



/* Zoeken in Database PHP Code - - - - - - - - - - - - - - */

function zoekenInDB($titel, $year) {
    global $pdo;

    $data = $pdo->prepare("SELECT title, publication_year FROM movie 
                                                          WHERE movie.title LIKE ?
                                                          AND movie.publication_year = ?");
    $data->execute(array("%$titel%","$year"));
    while ($row = $data->fetch()) {
        $resultaten[$row['title']] = array($row['title']);
    }
    $resultatenSimpel = array_values($resultaten);

    if (!empty ($resultaten)) {
        return $resultatenSimpel;
    } else {
        return false;
    }
}


/* Combobox Landen PHP Code - - - - - - - - - - - - - - */

function getLandenDB() {
    global $pdo;
    $landGegevens = array();

    $data = $pdo->query("SELECT country_name FROM country");
    while ($row = $data->fetch()) {
        $landGegevens[] = $row["country_name"];
    }

    return $landGegevens;
}



/* Archief PHP Code NIET GEBRUIKT - - - - - - - - - - - - - - */

//function getIngevoerdeInlogGegevens() {
//    $maxAantal = count(getPersoonsGegevens());
//    $arrayGegevens = getPersoonsGegevens();
//
//    if (isset($_POST['login'])) {
//
//        if (isset ($_POST['email']['password'])) {
//
//            for ($i = 0; $i < $maxAantal; $i++) {
//
//                if ($_POST['email']['password'] == $arrayGegevens[$i][0] ) {
//
//                    $_SESSION = $_POST['email'];
//                    $ingelogd = true;
//                }
//                else $ingelogd = false;
//            }
//        }
//    }
//}
//
//
//
//function getPersoonsGegevens() {
//    global $pdo;
//    $persoonsGegevens = array();
//
//    $data = $pdo->query("SELECT customer_mail_address, password FROM customer");
//    while ($row = $data->fetch()) {
//        $persoonsGegevens[$row["customer_mail_address"]] = array($row["password"]);
//    }
//    return $persoonsGegevens;
//}

//    global $pdo;
//    $loginCredentials = array();
//
//    $query = "SELECT customer_mail_address, password
//              FROM customer
//              WHERE customer_mail_address =".$_POST['email'];
//
//    $data = $pdo->query($query);
//    while ($row = $data->fetch()){
//        print_r($row);
//     //   $loginCredentials[$row["email"]]= array($row["password"]);
//    }
//
//    $email = $_POST['email'];
//    $password = $_POST['password'];
//
//    echo $email, $password;
//    print_r($loginCredentials);
//
//    if (!empty($loginCredentials)) {
////        $_SESSION[$email] = $row[$password];
//        echo 'woop';
//    } else {
//        echo 'noop';
//    }

//function registerToDatabase() {
//    global $pdo;
//
//    $naam = $_POST['name'];
//    $email = $_POST['email'];
//    $password = $_POST['password'];
//    $paypal_account = $_POST['paypal_account'];
//
//    $query = "INSERT INTO customer_mail_address, password
//              FROM customer
//              WHERE customer_mail_address =".$_POST['email'];
//    $data = $pdo->query($query);
//}

//function registrerenDB(){
//    global $pdo;
//    $email = 'h@s.com';
//    $naam = 'Henk Spenk';
//    $passwordcustomer = '1234';
//    $paypal = '14212';
//    $date = 1999;
//    $countryname = 'The Netherlands';
//
//    try {
//        $stmt = $pdo->prepare("INSERT INTO Customer (customer_mail_address, name,paypal_account,subscription_start,subscription_end,password,country_name) VALUES (?,?,?,?,?,?)");
//        $stmt->execute(array("$email,$naam,$paypal,$date,$date+365,$passwordcustomer,$countryname"));
//    } catch (PDOException $e) {
//        echo "Could not insert information, ".$e->getMessage();
//    }
//}


//function getZoekGegevens() {
//    global $pdo;
//    $zoekGegevens = array();
//
//    $data = $pdo->query("SELECT title, password FROM movie");
//    while ($row = $data->fetch()) {
//        $zoekGegevens[$row["customer_mail_address"]] = array($row["password"]);
//    }
//    return $zoekGegevens;
//}

//function getNames(){
//    global $pdo;
//    $names = array();
//
//    $data = $pdo->query("SELECT * FROM person");
//    while ($row = $data->fetch()){
//        $names[$row["gender"]]= array($row["firstname"], $row["lastname"]);
//    }
//
//    return $names;
//}


//function readDB(){
//    global $pdo;
//    $stmt = $pdo->prepare("SELECT * FROM Country");
//    $stmt->execute([]);
//    while ($row = $stmt->fetch()) {
//        print_r($row);
//    }
//}

//function zoekenInDB($titel, $genre_name, $year, $acteur, $reggiseur) {
//    global $pdo;
//
//    $data = $pdo->prepare("SELECT m.movieid, m.title
//                           FROM movie m
//                                INNER JOIN movie_genre mg on m.movieid = mg.movieid
//                                INNER JOIN movie_cast mc on m.movieid = mc.movieid
//                                INNER JOIN movie_director md on m.movieid = md.movieid
//                                INNER JOIN person p on mc.personid = p.personid
//                                INNER JOIN person pd on md.personid = pd.personid
//                           WHERE m.title LIKE CONCAT('%', ?, '%'),
//                           AND mg.genre_name LIKE CONCAT('%', ?, '%'),
//                           AND m.publication_year LIKE CONCAT('%', ?, '%'),
//                           AND CONCAT(p.firstname,' ',p.lastname) LIKE CONCAT('%', ?, '%')
//                           AND CONCAT(pd.firstname,' ',pd.lastname) LIKE CONCAT('%', ?, '%');
//                           GROUP BY m.movieid, m.title");
//    $data->execute("$titel", $genre_name,"$year", $acteur, $reggiseur);
//    while ($row = $data->fetch()) {
//        $resultaten[$row['title']] = array($row['title']);
//    }
//    $resultatenSimpel = array_values($resultaten);
//
//    if (!empty ($resultaten)) {
//        return $resultatenSimpel;
//    } else {
//        return false;
//    }
//}

?>