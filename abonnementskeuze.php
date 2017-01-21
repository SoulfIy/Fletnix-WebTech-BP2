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

    <div class="abonnementtoelichtingachtergrond">
        <div class="abonnementtoelichting">

            <h1>U bent er bijna</h1>
            <p>Vergelijk hier de abonnementen die door ons worden aangeboden. Kies het gewenste pakket.<br>
                Er zullen geregeld nieuwe features bij komen.</p>



        </div>
    </div>

    <div class="abonnementen">

        <table>
            <tr>
                <th></th>
                <th> <h3>Basic<br><p>€5.99 P/M</p></h3> </th>
                <th> <h3>Premium<br><p>€7.99 P/M</p></h3> </th>
                <th> <h3>Pro<br><p>€9.99 P/M</p></h3> </th>
            </tr>
            <tr>
                <td class="featuretitel">1080p HD kwaliteit<br><p>Kijk films en series in 1080p, full HD.</p></td>
                <td class="welofniet"><img class="check" src="css/images/checkmark_abonnement.svg" alt="check-mark"></td>
                <td class="welofniet"><img class="check" src="css/images/checkmark_abonnement.svg" alt="check-mark"></td>
                <td class="welofniet"><img class="check" src="css/images/checkmark_abonnement.svg" alt="check-mark"></td>
            </tr>
            <tr>
                <td class="featuretitel">Gratis Kijktijd<br><p>Kijk een deel van ons aanbod gratis.</p></td>
                <td class="welofniet">4 uur</td>
                <td class="welofniet">12 uur</td>
                <td class="welofniet">Unlimited</td>
            </tr>
            <tr>
                <td class="featuretitel">Kids corner<br><p>Laat uw kinderen genieten van een reuzachtig aanbod aan films en series voor kinderen.</p></td>
                <td class="welofniet"><img class="check" src="css/images/checkmark_abonnement.svg" alt="check-mark"></td>
                <td class="welofniet"><img class="check" src="css/images/checkmark_abonnement.svg" alt="check-mark"></td>
                <td class="welofniet"><img class="check" src="css/images/checkmark_abonnement.svg" alt="check-mark"></td>
            </tr>
            <tr>
                <td class="featuretitel">Geen reclames<br><p>Krijg tijdens het gebruik van onze service geen reclames.</p></td>
                <td class="welofniet"><img class="check" src="css/images/uncheckmark_abonnement.png" alt="check-mark"></td>
                <td class="welofniet"><img class="check" src="css/images/checkmark_abonnement.svg" alt="check-mark"></td>
                <td class="welofniet"><img class="check" src="css/images/checkmark_abonnement.svg" alt="check-mark"></td>
            </tr>
            <tr>
                <td class="featuretitel">Exclusieve films en series<br><p>Kijk films en series die alleen verkrijgbaar zijn in uw pakket.</p></td>
                <td class="welofniet"><img class="check" src="css/images/uncheckmark_abonnement.png" alt="check-mark"></td>
                <td class="welofniet"><img class="check" src="css/images/checkmark_abonnement.svg" alt="check-mark"></td>
                <td class="welofniet"><img class="check" src="css/images/checkmark_abonnement.svg" alt="check-mark"></td>
            </tr>
            <tr>
                <td class="featuretitel">4K Ultra HD kwaliteit<br><p>Kijk films en series in 4K Ultra HD kwaliteit.</p></td>
                <td class="welofniet"><img class="check" src="css/images/uncheckmark_abonnement.png" alt="check-mark"></td>
                <td class="welofniet"><img class="check" src="css/images/uncheckmark_abonnement.png" alt="check-mark"></td>
                <td class="welofniet"><img class="check" src="css/images/checkmark_abonnement.svg" alt="check-mark"></td>
            </tr>
            <tfoot>
            <tr>
                <td></td>
                <td> <button type="button" class="koopbutton" onclick="location.href='registratiescherm.php'">Go Basic</button> </td>
                <td> <button type="button" class="koopbutton" onclick="location.href='registratiescherm.php'">Go Premium</button> </td>
                <td> <button type="button" class="koopbutton" onclick="location.href='registratiescherm.php'">Go Pro</button> </td>
            </tr>
            </tfoot>
        </table>

    </div>

<?php require 'footer.html'; ?>

</body>
</html>
