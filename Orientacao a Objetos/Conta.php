<?php

class Conta{
    public string $cpfTitular;  // atributo da conta
    public string $nomeTitular; // atributo da conta
    public float $saldo = 0; // atributo da conta

    public function sacar(float $valorSacar){
        if($valorSacar > $this->saldo){
            echo 'Saldo indisponível';
            return;
        }
        $this->saldo -= $valorSacar;
    }

    public function  depositar(float $valorDeposito){
        if ($valorDeposito < 0) {
            echo `Valor para deposito invalido`;
            return;
        }
        $this->saldo += $valorDeposito;
    }

    public function transferir(float $valorTransferir, Conta $contaDestino){
        if($valorTransferir > $this->saldo) {
            echo 'Saldo indisponível';
            return;
        }
        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }
}
