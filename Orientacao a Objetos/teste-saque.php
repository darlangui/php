<?php

use Alura\Banco\Modelo\{Endereco, Cpf};
use Alura\Banco\Modelo\Conta\{ContaCorrent, ContaPoupanca, Titular};
require_once 'autoload.php';


$conta = new ContaCorrent(
    new Titular(
        new Cpf('1565465451468'),
        'Darlan',
        new Endereco('Portela', 'Centro', '13 de Maio', '156')));
$conta->depositar(500);
$conta->transferir(100, $conta);
$conta->sacar(100);

echo $conta->recuperarSaldo();