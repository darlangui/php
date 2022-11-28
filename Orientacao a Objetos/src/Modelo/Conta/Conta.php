<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta{
    private Titular $titular;// atributo da conta
    protected float $saldo; // atributo da conta
    private static $numContas;

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
        $valorSacar = $valorSacar * $this->tarifa();
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

    abstract protected function tarifa(): float;
}

