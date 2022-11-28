<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    protected function tarifa(): float
    {
        return 1.03;
    }
}