<?php

// 08_array_keys_values_count_merge.php

$informacoes1 = [
    'nome'    => 'David',
    'cargo'   => 'Dev PHP',
    'salario' => 1000.00,
];

$informacoes2 = [
    'projetos'      => ['OTB', 'PDV', 'Folha'],
    'prazo'         => 'Dezembro',
];

var_dump($informacoes1);
echo '<br />';

var_dump($informacoes1['nome']);
echo '<br />';

var_dump(array_keys($informacoes1));
echo '<br />';

var_dump(array_values($informacoes1));
echo '<br />';

var_dump(count($informacoes1));
echo '<br />';

$informacoes =  array_merge($informacoes1, $informacoes2);

echo '<pre>';
var_dump($informacoes);
echo '<br />';