<?php

// função simples
function primeiraFuncao()
{
    return 'Vamos imprir o que faz a função <br />';
}

echo 'Vamos a function';
echo '<hr>';
echo primeiraFuncao();
echo primeiraFuncao();
echo '<hr>';

// função retornando tipo
function segundaFuncao(): string  // retornando tipo string
{
    return 'Vamos imprir o que faz a função tem tipo de retorno <br />';
}

echo 'Vamos a function com tipo de retorno';
echo '<hr>';
echo segundaFuncao();
echo segundaFuncao();
echo segundaFuncao();
echo '<hr>';

// função com parametros
function terceiraFuncao($valor)
{
    return"{$valor} <br>";
}

echo 'Vamos a function com parametros de retorno';
echo '<hr>';
echo terceiraFuncao(123);
echo terceiraFuncao(456);
echo terceiraFuncao(789);
echo '<hr>';

// função com parametros com tipo
function quartaFuncao(string $valor)  // tipo string
{
    return "{$valor} <br>";
}

echo 'Vamos a function com parametros e tipo de retorno';
echo '<hr>';
echo quartaFuncao('123'); 
echo quartaFuncao('456');
echo quartaFuncao('789');
echo '<hr>';

// função com dois parametros com tipo
function somaFuncao(int $v1, int $v2): int  // tipo int
{
    return $v1 + $v2;
}

echo 'Vamos a function com dois parametros e tipo de retorno';
echo '<hr>';
echo somaFuncao(1, 1).' '; 
echo somaFuncao(2, 2).' ';
echo somaFuncao(3, 3),' ';
echo '<hr>';


// função com tres parametros com tipo e um opcional com valor definido
function soma2Funcao(int $v1, int $v2, $calc = 10): int  // tipo int
{
    return ($v1 + $v2) * $calc;
}

echo 'Vamos a function com tres parametros e tipo de retorno com terceiro opcional';
echo '<hr>';
echo soma2Funcao(1, 1, 2).' '; // informando o terceiro parametro 
echo soma2Funcao(2, 2).' ';
echo soma2Funcao(3, 3),' ';
echo '<hr>';

$calc = 2;

// função com Variavel de uso global, tres parametros com tipo e um opcional com valor definido
function soma3Funcao(int $v1, int $v2): int  // tipo int
{
    global $calc;

    return ($v1 + $v2) * $calc;
} 

echo 'Vamos a function variavel de uso global com tres parametros e tipo de retorno com terceiro opcional';
echo '<hr>';
echo soma3Funcao(1, 1).' ';  
echo soma3Funcao(2, 2).' ';
echo soma3Funcao(3, 3),' ';
echo '<hr>';


// função com return em array, tres parametros com tipo e um opcional com valor definido
function soma4Funcao(int $v1, int $v2): array  // tipo int
{
    global $calc;

    $teste = 50;
    $soma = ($v1 + $v2) + $calc;

    return [
        'teste' => $teste,
        'soma'  => $soma,
    ];
} 

echo 'Vamos a function variavel de uso global com tres parametros e tipo de retorno com terceiro opcional';
echo '<hr>';
$result = soma4Funcao(1, 2);
var_dump($result['soma']);
echo '<hr>';

// função recursiva - quando ela chama ela mesmo - ver exemplo calculo fatorial
function fatotialFuncao(int $v1): int  // tipo int
{
    if ($v1 <= 1)
        $v1 = $v1;
    else
        $v1 *= fatotialFuncao($v1 - 1);
    
    return $v1;
} 
echo 'Vamos a function recursiva';
echo '<hr>';

echo fatotialFuncao(4);
echo '<hr>';

echo fatotialFuncao(3);
echo '<hr>';

echo fatotialFuncao(2);
echo '<hr>';

echo fatotialFuncao(1);
echo '<hr>';