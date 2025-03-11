<?php

class Animal {
    public function fazerSom() {
        echo "Som genérico de animal<br>";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "Au Au<br>";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "Miau<br>";
    }
}

$cachorro = new Cachorro();
$gato = new Gato();

$cachorro->fazerSom();
$gato->fazerSom();



?>