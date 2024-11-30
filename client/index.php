<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
</head>

<body>
    <h1>Client Side</h1>
    <p>Chiamata all'API del server:</p>
    <?php
    $apiUrl = "http://server/api.php";

    $curlSES = curl_init();
    curl_setopt($curlSES, CURLOPT_URL, $apiUrl);
    curl_setopt($curlSES, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlSES, CURLOPT_HEADER, false);
    $result = curl_exec($curlSES);
    curl_close($curlSES);

    if ($result === FALSE) {
        echo "<p>Errore nella chiamata all'API.</p>";
    } else {
        echo "<p>Risposta del server: <strong>$result</strong></p>";
    }
    ?>
</body>

</html>