<?php

class Conta{
    public string $cpfTitular;  // atributo da conta
    public string $nomeTitular; // atributo da conta
    public float $saldo; // atributo da conta

    public function sacar(float $valorSacar){
        if($valorSacar > $this->saldo){
            echo 'Saldo indisponível';
        }else{
            $this->saldo -= $valorSacar;
        }
    }

    public function  depositar(float $valorDeposito){
        if ($valorDeposito >= 0){
            $this->saldo += $valorDeposito;
        }else{
            echo `Valor para deposito invalido`;
        }
    }
}
