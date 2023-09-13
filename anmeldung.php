<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anmeldedaten Ausgabe</title>
</head>
<body>
    <?php
        $vorname = $_POST["Vorname"];
        $nachname = $_POST["Nachname"];
        $email = $_POST["Email"];
        $telefonnummer = $_POST["Telefonnummer"];
        $plz = $_POST["PLZ"];
        $ort = $_POST["Ort"];
        $straße = $_POST["Straße"];

        echo ("Vorname: {$vorname} <br>");
        echo ("Nachname: {$nachname} <br>");
        echo ("Email: {$email} <br>");
        echo ("Telefonnummer: {$telefonnummer} <br>");
        echo ("PLZ: {$plz} <br>");
        echo ("Ort: {$ort} <br>");
        echo ("Straße und Hausnummer: {$straße} <br>");
    ?>
</body>
</html>