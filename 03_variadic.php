<?php

function myVariadicFunction(string ...$args) {
    var_dump($args);
}

myVariadicFunction('chat', 'pokemon', 'zelda');