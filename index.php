<?php

$number = 10;
function getRandomString($number)
{
    $charactersNumberSymbols = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$#@';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($charactersNumberSymbols) - 1);
        $randomString .= $charactersNumberSymbols[$index];
    }

    return $randomString;
}

echo getRandomString($number);