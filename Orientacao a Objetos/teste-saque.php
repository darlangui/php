<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;

require_once 'autoload.php';


$conta = new Conta(new Titular(new Cpf('1565465451468'), 'Darlan', new Endereco('Portela', 'Centro', '13 de Maio', '156')));
$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();