<?php

echo 'vamos ao FOR';
echo '<hr>';

for ($i = 0; $i < 10; $i++) {
    echo "{$i} <br>";
}

echo 'fim do for';
echo '<hr>';

echo 'vamos percorrer um array com  FOR';
echo '<hr>';

$texto = ['ab', 'ac', 'ad', 'ae', 'af', 'ah'];
for ($i = 0; $i<count($texto); $i++) {
    echo $texto[$i].' '; 
}

echo '<br />';
echo 'fim do for';
echo '<hr>';

echo 'vamos percorrer um array com  FOREACH';
echo '<br />';
echo 'este é mais usado para array devido a facilidade de uso';
echo '<hr>';

$textos = ['ab1', 'ac2', 'ad3', 'ae4', 'af5', 'ah6'];
foreach ($textos as $texto) {
    echo $texto.' '; 
}

echo '<br />';
echo 'fim do foreach';
echo '<hr>';

echo 'vamos percorrer um array com  FOREACH exibindo chave';
echo '<br />';
echo 'este é mais usado para array devido a facilidade de uso';
echo '<hr>';

$textos = ['ab1', 'ac2', 'ad3', 'ae4', 'af5', 'ah6'];
foreach ($textos as $key => $texto) {
    echo "{$key} => {$texto} <br />"; 
}

echo '<br />';
echo 'fim do foreach';
echo '<hr>';


echo 'vamos percorrer um array que tenha chave e valor com  FOREACH exibindo chave';
echo '<br />';
echo 'este é mais usado para array devido a facilidade de uso';
echo '<hr>';

$textos = [
    '1' => 'ab1',
    '2' => 'ac2',
    '3' => 'ad3',
    '4' => 'ae4',
    '5' => 'af5', 
    '6' => 'ah6',
];
foreach ($textos as $key => $texto) {
    echo "{$key} => {$texto} <br />"; 
}

echo '<br />';
echo 'fim do foreach';
echo '<hr>';

echo 'vamos ao WHILE';
echo '<br />';
// echo 'este é mais usado para array devido a facilidade de uso';
echo '<hr>';

$i = 1;

while ($i < 100) {
    echo $i.' ';
    $i++;
}
echo '<br />';
echo 'fim do while';
echo '<hr>';


echo 'vamos ao DOWHILE';
echo '<br />';
// echo 'este é mais usado para array devido a facilidade de uso';
echo '<hr>';

$i = 1;
do {
    echo $i.' ';
    $i++;
} while ($i <= 10);

echo '<br />';
echo 'fim do dowhile';
echo '<hr>';
