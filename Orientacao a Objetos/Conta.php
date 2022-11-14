<?php

class Conta{
    private string $cpfTitular;  // atributo da conta
    private string $nomeTitular; // atributo da conta
    private float $saldo; // atributo da conta

    public function __construct(String $nome, String $cpf){
        $this->saldo = 0;
        $this->nomeTitular = $nome;
        $this->cpfTitular = $cpf;
        echo 'criando nova conta'.PHP_EOL;
    }
    public function sacar(float $valorSacar): void{
        if($valorSacar > $this->saldo){
            echo 'Saldo indisponível';
            return;
        }
        $this->saldo -= $valorSacar;
    }

    public function  depositar(float $valorDeposito): void{
        if ($valorDeposito < 0) {
            echo `Valor para deposito invalido`;
            return;
        }
        $this->saldo += $valorDeposito;
    }

    public function transferir(float $valorTransferir, Conta $contaDestino): void{
        if($valorTransferir > $this->saldo) {
            echo 'Saldo indisponível';
            return;
        }
        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }

    public function recuperarSaldo(): float{
        return $this->saldo;
    }

    public function recuperarCpf(): String{
        return $this->cpfTitular;
    }

    public function recuperarNome(): String{
        return $this->nomeTitular;
    }

    public function defineCpf(String $cpf): void{
        $this->cpfTitular = $cpf;
    }

    public function defineNome(String $nome): void{
        $this->nomeTitular = $nome;
    }

}

