<?php


trait Logavel {
    public function logar() {
        echo "Logando...<br>";
    }
}

class Usuario {
    use Logavel;
}

class Administrador {
    use Logavel;
}

$user = new Usuario();
$admin = new Administrador();

$user->logar();
$admin->logar();




?>