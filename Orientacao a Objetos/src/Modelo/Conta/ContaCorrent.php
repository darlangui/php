<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrent extends Conta
{
    protected function tarifa(): float
    {
        return 1.05;
    }

    public function transferir(float $valorTransferir, Conta $contaDestino): void{
        if($valorTransferir > $this->saldo) {
            echo 'Saldo indisponível';
            return;
        }
        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }
}