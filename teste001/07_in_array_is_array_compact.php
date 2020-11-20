<?php

// $nomes = ['Rose', 'David', 'Jessica'];
// $nomes = array('David', 'Rose', 'Jessica');

$nome  = 'David';
$cargo = 'Dev';
$salario = 1000.00;

$informacoes1 = [
    $nome,
    $cargo,
    $salario,
];
var_dump($informacoes1);
echo '<br />';


$informacoes2 = compact('name', 'cargo', 'salario');
var_dump($informacoes2);
echo '<br />';

var_dump(is_array($nome));
echo '<br />';

var_dump(is_array($informacoes2));
echo '<br />';

var_dump(in_array('David', $informacoes1));
echo '<br />';




