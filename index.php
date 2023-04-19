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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>GENERATORE DI PASSWORD CASUALE</h1>
        <form method="GET">
            <label for="number_chosen">Scegli la lunghezza della password da generare</label>
            <input type="number" id="number_chosen" name="length">
            <div>
                <button type="submit">Invia</button>
            </div>
        </form>
    </div>
</body>
</html>