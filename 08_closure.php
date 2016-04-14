<?php

//===> Exceptions ?

var_dump(new Class {
    public function meow() {
        echo 'meow';
    }
});

//===================

class Animal {
    public $name = 'Amaterasu';

    public function walk() {}
}


var_dump(new Class extends Animal {
    public function meow() {
        echo 'meow';
    }
});


//===================

class Hero {
    public $name;
}

$hero       = new Hero();
$hero->name = 'Link';

// Closure
$displayName = function(){ echo $this->name; };

// Insertion du contexte
$displayName->call($hero);