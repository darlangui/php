<?php

namespace Alura\Banco\Modelo\Conta;

class Conta{
    private Titular $titular;// atributo da conta
    private float $saldo; // atributo da conta
    private static $numContas;
    private int $tipo;

    /**
     * $tipo
     * 1 = corrente
     * 2 = poupança
     */

    public function __construct(Titular $titular){
        $this->saldo = 0;
        $this->titular = $titular;
        echo 'criando nova conta'.PHP_EOL;
        self::$numContas++;
    }

    public function __destruct()
    {
        self::$numContas--;
    }

    public function sacar(float $valorSacar): void{
        $valorSacar = $valorSacar * 1.05;
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


    public function defineCpf(String $cpf): void{
        $this->cpfTitular = $cpf;
    }

    public function defineNome(String $nome): void{
        $this->nomeTitular = $nome;
    }

    public static function recuperaNumContas(): int{
        return self::$numContas;
    }

    public function recuperaCpf(): string{
        return $this->titular->recuperaCpf();
    }

    public function recuperaNome(): string
    {
        return $this->titular->recuperaNome();
    }
}

