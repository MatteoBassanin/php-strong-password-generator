<?php

// header("location: ./index.php");

//     $number = $_SESSION['numberLength'];
// $_SESSION['length'] = $number;


if (isset($_GET['length']) && $_GET['length'] > 0){

    $number = $_GET['length'];   
    $_SESSION['numberLength'] = getRandomString($number);
    header("location: ./generated_password.php");

}


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



?>
