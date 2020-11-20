<?php

define('NOME_DA_SUA_CONSTANTE', 'valor da sua constante');

/*
NOME_DA_SUA_CONSTANTE = 123; // erro pois não pode ser alterado
print NOME_DA_SUA_CONSTANTE;
*/

var_dump(NOME_DA_SUA_CONSTANTE);

echo '<br />';
const TESTE_OUTRA_FORMA = 56788;
var_dump(TESTE_OUTRA_FORMA);