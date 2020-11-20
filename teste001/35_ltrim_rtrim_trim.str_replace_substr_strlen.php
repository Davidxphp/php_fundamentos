<?php

// retirar espaçoes ltrim , rtrim e trim
echo 'vamos ao ltrim, rtrim e trim';
echo '<hr>';

$texto = ' David   esta tentando aqui   retirada de espaços   ';

var_dump($texto);
echo '<hr>';

var_dump(ltrim($texto));
echo '<hr>';

var_dump(rtrim($texto));
echo '<hr>';

var_dump(trim($texto));
echo '<hr>';

echo 'vamos ao str_replace, substr, strlen';
echo '<hr>';

$dominio = 'www.teste.com.br';

// replace
echo str_replace('www.', ' ', $dominio);
echo '<hr>';

echo str_replace('www.', 'https://www.', $dominio);
echo '<hr>';

// substr
echo substr($dominio, 0, 4);
echo '<hr>';

echo substr($dominio, -7);
echo '<hr>';

$dominioComProtocolo = 'https://www.teste.com.br';
$protololo = substr($dominioComProtocolo, 0, 8);
if ($protololo == 'https://')
    echo 'é seguro';
else
    echo 'não é seguro';

echo '<hr>';

// pegar só dominio

var_dump(substr($dominioComProtocolo, 12, -7));
echo '<hr>';

// contar caracteres
echo strlen($dominioComProtocolo);
echo '<hr>';