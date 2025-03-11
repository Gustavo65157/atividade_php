<?php
class ContaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
        echo "Depósito de R$ $valor realizado.<br>";
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ $valor realizado.<br>";
        } else {
            echo "Saldo insuficiente!<br>";
        }
    }

    public function consultarSaldo() {
        echo "Saldo atual: R$ $this->saldo<br>";
    }
}

$conta = new ContaBancaria("João", 500);
$conta->depositar(200);
$conta->sacar(100);
$conta->consultarSaldo();
?>

?>
