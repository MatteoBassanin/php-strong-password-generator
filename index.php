<?php

session_start();

 require( __DIR__ . "/functions.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <form method="GET">
        <input type="number" id="number_chosen" name="length">
        <label for="number_chosen">Scegli la lunghezza della password da generare</label>
        <button type="submit">Invia</button>
    </form>
</body>
</html>