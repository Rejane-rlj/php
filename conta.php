<?php
// Vamos criar um sistema bancário com
// saque , depósito , extrato, transferência

class Conta{
    public $saldo;
    public $numeroConta;
    public $titular;

    public function __construct($titular, $numeroConta, $saldo=0){
        $this->titular = $titular;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo; 
    }

    public function saque($valor){
        if($valor < 0){
            echo "Valor inválido\n";
        }
        else if ($this->saldo >= $valor){
            $this->saldo = $this->saldo - $valor;
            //$this-> saldo -= $valor;
            echo " Saque realizado com sucesso. \n Saldo atual: $this->saldo.\n";
        }
        else{
            echo " Saldo Insuficiente\n";
        }
    }
    public function deposito($valor){
        if($valor > 0){
            $this->saldo += $valor;
            echo " Depoosito realiizado com suceesso\n";
            echo " Saldo Atual: R$ $this->saldo.\n";
        }
        else{
            echo " Valor Inválido\n";
        }
    }

}

$conta1 = new Conta("Renan", "10000" , 500);
$conta1->saque(50);
$conta1->deposito(100);
?>