<?php

$a = 2;
$b = 3;

$resulado = $a + $b;
echo "O resultado da soma entre {$a} + {$b} = {$resulado}";
echo '<hr>';

$resulado = $b - $a;
echo "O resultado da subtração entre {$b} - {$a} = {$resulado}";
echo '<hr>';

$resulado = $a * $b;
echo "O resultado da multiplicação entre {$a} * {$b} = {$resulado}";
echo '<hr>';

$resulado = $b / $a;
echo "O resultado da divivão entre {$b} / {$a} = {$resulado}";
echo '<hr>';

$c = 4;
$d = 2;

$resulado = $c / $d;
echo "O resultado do resto da divisão é {$c} % {$d} = {$resulado}";
echo '<hr>';

// podemos operador % para saber se numero é par 
// assim:  

if ($c % $d == 0)
    echo 'Numero par';
else
    echo 'NUmero impar';

echo '<hr>';

// testar com numero impar

$e = 3;
$f = 5;
if ($f % $e == 0)
    echo 'numero par';
else
    echo 'Numero impar';
echo '<hr>';


$resulado = 2 + 2 - 8 / 4 * 2;  // *, /, +, -
echo $resulado;
echo '<hr>';

$resulado = (2 + 2 - 8 / 4) * 2; //  mudar usa ()
echo $resulado;
echo '<hr>';


// operador de atribuição 

$a = 25;
echo "{$a} <br />";

$a += 25;
echo "{$a} <br />";

$a -= 25;
echo "{$a} <br />";

$a *= 25;
echo "{$a} <br />";

$a /= 25;
echo "{$a} <br />";

echo '<hr>';
