<?php
// operadores condicionais

$num = 23;

// comparando variavel com valor
if ($num == 23) {
    echo 'é igual a 23';
    echo '<hr>';
}

// comparando variavel com variavel

$num2 = 25;
if ($num != $num2) {
    echo ' $num é diferente de $num2 , vaja:';
    echo "{$num} é diferente de {$num2}";
    echo '<hr>';
}


// comparando variavel com variavel outro formato de of
// este formato é pouco usado
$num2 = 25;
if ($num != $num2):
    echo ' $num é diferente de $num2 , vaja:';
    echo "{$num} é diferente de {$num2}";
    echo '<hr>';
endif;

// vamos para else
echo 'vamos para else';
echo '<hr>';

$num4 = 40;
$num5 = 41;

if ($num4 == $num5) {
    echo 'é igual';
} else {
    echo 'é diferente';
}
echo '<hr>';

// vamos para elseif
echo 'vamos para elseif';
echo '<hr>';

$num26 = 26;

if ($num26 == 27) {
    echo 'numero 26';
} elseif($num26 == 26) {
    echo 'é igual a 26';
} elseif($num26 == 28) {
    echo ' é igual a 28';
} else {
    echo ' náo é igual';
}

// vamos para switch
echo '<hr>';
echo 'vamos usar switch';

// por exemplo neste exemplo abaixo será substituido pelo swith
$num10 = 10;

if ($num10 == 13)
    echo 'treze';
elseif ($num10 == 14)
    echo ' num 14';
elseif ($num10 == 15)
    echo ' num 15';
else
    echo 'não tem numero igual ';

// vamos switch
echo '<hr>';
$num10 = 10;

switch ($num10) {
    case $num10 == 12;
        echo 'é num 12';
    break;
    case $num10 == 14;
        echo ' é num 14';
    break;
    case $num10 == 20;
        echo ' é num 20';
    break;
    case $num10 == 10;
        echo ' é num 10';
    break;
    default: 
        echo ' não tem valor igual na comparação ';
    break;
        
}
echo '<hr>';

