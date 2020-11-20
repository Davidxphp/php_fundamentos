<?php

// 11_end_filter_map.php

$numeros = [2, 5, 7, 10, 40, 55, 69, 70, 99, 102];

// echo $numeros[count($numeros) - 1];

echo end($numeros);

$numFilter = array_filter($numeros, function ($numeros) {
    return $numeros >= 18;
});

echo '<hr>';
var_dump($numFilter);

$nomes = ['David', 'Rose', 'Jessica'];
$nomes[0] = strtoupper($nomes[0]);
$nomes[1] = strtoupper($nomes[1]);
$nomes[2] = strtoupper($nomes[2]);
echo '<hr>';
var_dump($nomes);

$nomes = array_map(function ($nomes) {
    return strtoupper($nomes);
}, $nomes);
echo '<hr>';
var_dump($nomes);


$nomes =  array_map('mudaMaiuscula', $nomes);

function mudaMaiuscula($value)
{
    return strtoupper($value);
}

echo '<hr>';
var_dump($nomes);
