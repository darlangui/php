<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function bonificacao(): float
    {
        return 0.5;
    }

    public function sobeNivel()
    {
        $this->recebeAumento($this->salario * 0.75);
    }
}