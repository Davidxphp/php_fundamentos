<?php

// 09_pop_shift_unset_push_unique.php

$compras = ['Meia', 'Camiseta', 'Camisa', 'Saia'];
var_dump($compras);
echo '<br />';

array_pop($compras);
var_dump($compras);
echo '<br />';

array_shift($compras);
var_dump($compras);
echo '<br />';

unset($compras[0]);
var_dump($compras);
echo '<br />';

array_push($compras, 'calça');
array_push($compras, 'bermuda');
var_dump($compras);
echo '<br />';

array_unshift($compras, 'blusa preta');
array_unshift($compras, 'calça');
var_dump($compras);
echo '<br />';

$compras = array_unique($compras);
var_dump($compras);
echo '<br />';









