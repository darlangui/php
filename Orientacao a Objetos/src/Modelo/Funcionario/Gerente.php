<?php

namespace Alura\Banco\Modelo\Funcionario;

class Gerente extends Funcionario
{
    public function bonificacao(): float
    {
        return $this->salario;
    }
}