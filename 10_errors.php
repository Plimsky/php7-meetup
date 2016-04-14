<?php

// Fatal Error

$var = 1;

try {
    $var->method();
} catch (Error $e) {
    echo $e->getCode() . ' ' . $e->getMessage() . '<br>';
}

// Catchable fatal error

function add(int $left, int $right)
{
    return $left + $right;
}

try {
    $value = add('left', 'right');
} catch (TypeError $e) {
    echo $e->getMessage(), '<br>';
}

// =======================

// Gestion des erreurs sur PHP 7 ET 5 à la fois

try {
    // Code that may throw an Exception or Error.
    // Code qui lâche un Exception ou Error.
} catch (Throwable $t) {
    // Executé seulement sur PHP 7 mais ne passera pas sur PHP 5
} catch (Exception $e) {
    // Executé seulement sur PHP 5 et ne sera pas atteind par PHP 7
}