<?php

class Cat {}

function myReturnInt(int $arg): int {
    return $arg;
}

var_dump(myReturnInt(10));

function myReturnCat(): Cat {
    return new Cat();
}

var_dump(myReturnCat());