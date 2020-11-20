<?php

$nome = 'david de Souza, Dev Php';
echo strtoupper($nome);
echo '<hr>';

echo strtolower($nome);
echo '<hr>';

echo ucfirst($nome);
echo '<hr>';

echo 'combinando funções';
echo '<hr>';

echo ucfirst(strtolower($nome));
echo '<hr>';

echo ucwords(strtolower($nome));
echo '<hr>';

echo 'Vamos ao EXPLODE e IMPLODE';
echo '<hr>';

$estado = 'São Paulo/SP';
$arrayEstado = explode('/', $estado);
var_dump($arrayEstado);
echo '<hr>';

// imprime um item do array
var_dump($arrayEstado[0]);  // saida = São Paulo
echo '<hr>';

var_dump($arrayEstado[1]); // saida = SP
echo '<hr>';

// mais items no array
$estado = 'São Paulo/SP/Brasil/Terra';
$arrayEstado = explode('/', $estado);
var_dump($arrayEstado);
echo '<hr>';

// imprime um item do array
var_dump($arrayEstado[2]);  // saida = Brasil
echo '<hr>';

var_dump($arrayEstado[3]); // saida = Terra
echo '<hr>';

// implode
echo implode($arrayEstado, ' # ');
echo '<hr>';
// outro exemplo array com numeros

$numeros = [1,2,3,4,5,6,7,8,9,10];
echo implode($numeros, '-');
echo '<hr>';