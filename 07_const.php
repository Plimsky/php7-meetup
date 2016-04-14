<?php

define('CONFIG', [1, 2, 3]);
var_dump(CONFIG);

$var = 'G';
define('CONFI' . $var, [1, 2, 3]);
var_dump(CONFIG);