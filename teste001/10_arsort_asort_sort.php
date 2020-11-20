<?php

// 10_arsort_asort_sort.php

$compras_carro = ['Batata', 'Arroz', 'Cebola', 'Carne de Posco'];

arsort($compras_carro);

echo '<pre>';
var_dump($compras_carro);
echo '<hr>';

$compras_carro2 = [
    0 => 'Batata',
    1 => 'Arroz', 
    2 => 'Cebola',
    3 => 'Carne de Posco'
];

asort($compras_carro2);
echo '<pre>';
var_dump($compras_carro2);
echo '<hr>';

asort($compras_carro2);
echo '<pre>';
var_dump($compras_carro2);
echo '<hr>';

sort($compras_carro2);
echo '<pre>';
var_dump($compras_carro2);
echo '<hr>';


