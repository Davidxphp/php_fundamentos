<?php

// operadores relacionais ou comparação

$a = 2;
$b = 3;
// operador ==
if ($a == $b) {
    echo 'IF';
} else {
    echo 'ELSE';   // imprime ELSE, pois é $a é diferente $b
}
echo "<hr>";

$a = 3;
$b = 3;
// operador ==
if ($a == $b) {
    echo 'IF';    // imprime IF, pois $a é igual $b
} else {
    echo 'ELSE';   
}
echo "<hr>";

$a = 3;
$b = '3'; // php converte
// operador ==
if ($a == $b) {
    echo 'IF';    // imprime IF, pois $a é igual $b
} else {
    echo 'ELSE';   
}
echo "<hr>";

$a = 3;
$b = '3'; // php converte
// operador === compara tipo e conteúdo da variável
if ($a === $b) {
    echo 'IF';    // imprime IF, pois $a é igual $b
} else {
    echo 'ELSE';   
}
echo "<hr>";

$a = 2;
$b = '3'; // php converte
// operador <> compara se conteúdo da variável e diferente
if ($a <> $b) {
    echo 'IF';    
} else {
    echo 'ELSE';    // imprime ELSE, pois $a é diferente de $b
}
echo "<hr>";

$a = 2;
$b = '3'; // php converte
// operador != compara se conteúdo da variável e diferente
if ($a != $b) {
    echo 'IF';    
} else {
    echo 'ELSE';    // imprime ELSE, pois $a é diferente de $b
}
echo "<hr>";

$a = 2;
$b = '3'; // php converte
// operador !== compara se conteúdo e tipo da variável e diferente
if ($a !== $b) {
    echo 'IF';    
} else {
    echo 'ELSE';    // imprime ELSE, pois $a é diferente de $b
}
echo "<hr>";

$a = 2;
$b = '3'; // php converte
// operador >= compara se conteúdo da variável e maior ou igual
if ($a > $b) {
    echo 'IF';    
} else {
    echo 'ELSE';    // imprime ELSE, pois $a é diferente de $b
}
echo "<hr>";

echo "<hr>";
$a = 2;
$b = '3'; // php converte
// operador >= compara se conteúdo da variável e maior ou igual
if ($a >= $b) {
    echo 'IF';    
} else {
    echo 'ELSE';    // imprime ELSE, pois $a é diferente de $b
}
echo "<hr>";

echo "<hr>";

$a = 2;
$b = '3'; // php converte
// operador >= compara se conteúdo da variável e maior ou igual
if ($a < $b) {
    echo 'IF';    
} else {
    echo 'ELSE';    // imprime ELSE, pois $a é diferente de $b
}
echo "<hr>";

echo "<hr>";

$a = 2;
$b = '3'; // php converte
// operador >= compara se conteúdo da variável e maior ou igual
if ($a <= $b) {
    echo 'IF';    
} else {
    echo 'ELSE';    // imprime ELSE, pois $a é diferente de $b
}
echo "<hr>";

echo "<hr>";

