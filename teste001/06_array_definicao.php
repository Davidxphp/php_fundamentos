<?php

$carros = ['Fusca', 'Gol', 'chevete', 'opala', 'xyz1234', 15555.78];

var_dump($carros);

echo '<br />';
var_dump($carros[2]); // para acessar 2 possição , imprimir chevete

//  array composto

$carro2 = [
    'cor' => 'Preto',
    'portas' => 2,
    'ano' => 2020,
];
$carro2['ar'] = true;
$carro2['som'] = 'Sony';

$carro2['portas'] = 4;   // alterando propriodades

echo '<br />';
echo $carro2['portas'];  // informando o indice portas , imprime 2
echo '<br />';
echo $carro2['ano'];  // informando o indice ano , imprime 2020
echo '<br />';
echo $carro2['ar'];  // informando o indice ar , imprime 1 para true
echo '<br />';
echo $carro2['som'];  // informando o indice ar , imprime Sony

echo '<br />';
echo $carro2['portas'];  // informando o indice portas com propriedade alterada


// array mult dimensionais 

$carro3 = [
    'vw' => [
        'modelos'   => 'fusca',
        'motor'     => 'flex',
    ],
    'fiat' => [
        'modelos'   => '147',
        'motor'     => '1.0',
        'cor'       => 'amarela',
    ],
];

echo '<br />';
echo $carro3['fiat']['cor'];

