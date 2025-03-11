<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirInfo() {
        echo "Carro: $this->marca $this->modelo, Ano: $this->ano <br>";
    }
}

$meuCarro = new Carro("Toyota", "Corolla", 2022);
$meuCarro->exibirInfo();
?>