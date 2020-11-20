<?php

$nome = 'David';

if (isset($nome))
    echo $nome;
else
    echo 'não existe';

echo '<hr>';
unset($nome);
if (isset($nome))
    echo $nome;
else
    echo 'não existe';

