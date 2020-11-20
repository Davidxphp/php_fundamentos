<?php

$a = 4;
$a++;
echo $a;
echo '<hr>';

$a = 4;
$a--;
echo $a;
echo '<hr>';

$a = 4;
++$a;
echo $a;
echo '<hr>';

$a = 4;
--$a;
echo $a;
echo '<hr>';

// veja diferença do pos e pre
$b = 2;
echo $a + $b++;
echo '<hr>';

echo $a + ++$b;
echo '<hr>';

echo $a + $b--;
echo '<hr>';

echo $a + --$b;
echo '<hr>';

