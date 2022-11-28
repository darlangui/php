<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacao = 0;
    public function adicionaBonificacao(Funcionario $funcionario)
    {
            $this->totalBonificacao += $funcionario->bonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacao;
    }
}