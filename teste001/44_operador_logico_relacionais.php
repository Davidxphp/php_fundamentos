<?php

$a = 2;
$b = 2;

if ($a == $b) {
    echo 'passei no IF';
} else {
    echo 'passei no ELSE';
}
echo '<hr>';

if ($a == $b AND $a == 2) {
    echo 'passei no IF';
} else {
    echo 'passei no ELSE';
}
echo '<hr>';

// OR
if ($a == $b OR $a == 2) {
    echo 'passei no IF';
} else {
    echo 'passei no ELSE';
}
echo '<hr>';
// usar ||
if ($a == $b || $a == 2) {
    echo 'passe if';
} else {
    echo 'passei no ELSE';
}
echo '<hr>';

if (!$a == $b) {
    echo 'passei no IF';
} else {
    echo 'passei no ELSE';
}
echo '<hr>';

// operaradores relacionais

$c = 2;
$d = 3;

if ($c == $b) {
    echo ' IF';
} else {
    echo 'ELSE';
}
echo '<hr>';

if ($c === $b) {
    echo ' IF';
} else {
    echo 'ELSE';
}
echo '<hr>';

if ($c <> $b) {
    echo ' IF';
} else {
    echo 'ELSE';
}
echo '<hr>';

if ($c != $b) {
    echo ' IF';
} else {
    echo 'ELSE';
}
echo '<hr>';

if ($c !== $b) {
    echo ' IF';
} else {
    echo 'ELSE';
}
echo '<hr>';

if ($c > $b) {
    echo ' IF';
} else {
    echo 'ELSE';
}
echo '<hr>';

if ($c >= $b) {
    echo ' IF';
} else {
    echo 'ELSE';
}
echo '<hr>';

if ($c < $b) {
    echo ' IF';
} else {
    echo 'ELSE';
}
echo '<hr>';

if ($c <= $b) {
    echo ' IF';
} else {
    echo 'ELSE';
}
echo '<hr>';

