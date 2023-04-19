<?php

session_start();
$_SESSION['numberLength'] = getRandomString($number);

//     $number = $_SESSION['numberLength'];
// $_SESSION['length'] = $number;
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

// echo getRandomString($number);

?>
