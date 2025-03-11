<?php
class Pessoa {
    public $nome;
    public $idade;
    public $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function falar() {
        echo "Olá, meu nome é $this->nome, tenho $this->idade anos e sou do sexo $this->sexo.<br>";
    }
}

$pessoa = new Pessoa("Carlos", 30, "Masculino");
$pessoa->falar();
?>

    