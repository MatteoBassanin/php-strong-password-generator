<?php

$number = $_GET['length'];
function getRandomString($number)
{
    $charactersNumberSymbols = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$#@';
    $randomString = '';

    for ($i = 0; $i < $number; $i++) {
        $index = rand(0, strlen($charactersNumberSymbols) - 1);
        $randomString .= $charactersNumberSymbols[$index];
    }

    return $randomString;
}

echo getRandomString($number);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generated</title>
</head>
<body>
    <div><a href="index.php">Back</a></div>
</body>
</html>