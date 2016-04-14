<?php

$bytes = random_bytes(10);
var_dump(bin2hex($bytes));

$randomInt = random_int(10, 200);
var_dump($randomInt);