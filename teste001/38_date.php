<?php

echo 'Vamos trabalhar com datas';
echo '<hr>';

date_default_timezone_set('America/Sao_Paulo');

echo 'O ano atual: '. date('Y'). '<br>';
echo 'O ano atual: '. date('y'). '<br>';
echo 'O mês atual: '. date('m'). '<br>';
echo 'O dia atual: '. date('d'). '<br>';
echo 'O data atual: '. date('d/m/y'). '<br>';
echo 'O data atual: '. date('Y-m-d'). '<br>';
echo 'O hora atual: '. date('H'). '<br>';
echo 'O hora atual: '. date('h'). '<br>';
echo 'Minuto atual: '. date('i'). '<br>';
echo 'Segundo atual: '. date('s'). '<br>';
echo 'Hora Atual: '. date('H:i:s'). '<br>';

// date_default_timezone_set('America/Sao_Paulo');

// echo 'Timezone: ' . date_defaut_timezome_get() . '<br />';

// date_default_timezone_set()
echo 'Timezone' . date_default_timezone_get();

echo '<hr>';

echo phpinfo();
