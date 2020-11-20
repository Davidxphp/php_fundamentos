<?php

$var1 = "Teste um";
$var2 = "Teste dois";

echo $var1.' '.$var2;
echo '<hr>';

echo $var1.' '.$var2.' '. 28.56;
echo '<hr>';

// para reutilizar podemos criar uma variável
$var3 = $var1.' '.$var2.' '. 28.56;
echo $var3;
echo '<hr>';

// com variavesi e string
$nome  = 'David';
$cargo = 'Dev Full';

echo 'O '.$nome.' é profissional de informática em '.$cargo;
echo '<hr>';

// uma forma mais simples com aspa e chaves na variavel
echo "O {$nome} e prof. de info.  em {$cargo}"; // usar assim para concatenar
echo '<hr>';
echo 'Usar assim só com string';
echo '<hr>';


