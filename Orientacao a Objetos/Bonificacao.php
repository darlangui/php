<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Cpf;
use \Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Diretor;
use \Alura\Banco\Modelo\Funcionario\Desenvolvedor;

$Funcionario = new Desenvolvedor('Darlan', new CPF('78231645641'), 'Desenvolvedor', 1000);

$Funcionaria = new Gerente('Patricia', new CPF('414561564135'), 'Gerente', 3000);

$Diretor = new Diretor('Patricia', new CPF('414561564135'), 'Gerente', 5000);

$controlar = new ControladorDeBonificacoes();
$controlar->adicionaBonificacao($Funcionario);
$controlar->adicionaBonificacao($Funcionaria);
$controlar->adicionaBonificacao($Diretor);

echo $controlar->recuperaTotal();