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

<div class="contact">

    <div class="contactinfoachtergrond">

        <div class="contactinfo">

            <h1>Neem contact met ons op...</h1>
            <p>Vul het onderstaande formulier in om contact met ons op te nemen.</p>

        </div>

    </div>

    <div class="contactform">

        <form title="contactform" name="contactform" action="mailto:goldendualgun@hotmail.nl" method="post">

            <div class="contactformmain">

                <div class="contactformeen">

                <p>Naam<em>*</em></p>
                <input title="name" type="text" name="name" placeholder="Voornaam achternaam" maxlength="38" required><br>

                <p>Email<em>*</em></p>
                <input title="email" type="email" name="email-address" placeholder="Email-address" required><br>

                <p>Telefoon</p>
                <input title="telephone" type="tel" name="telephone" placeholder="Telefoon"><br>

                    <div class="contactformbutton">

                        <input type="submit" onclick="alert('bericht verzonden')">

                    </div>

                </div>

                <div class="contactformtwee">

                <p>Onderwerp</p>
                <input title="subject" type="text" name="subject" placeholder="Onderwerp"><br>

                <p>Omschrijving<em>* (Max 800 karakters)</em></p>
                <textarea title="description" maxlength="600" placeholder="Omschrijving" required></textarea><br>

                    <em>* deze velden zijn verplicht</em>

                </div>

            </div>

        </form>

    </div>

</div>

<?php require 'footer.html'; ?>

</body>
</html>
